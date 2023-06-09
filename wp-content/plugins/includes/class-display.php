<?php

class FacetWP_Display
{

    /* (array) Facet types being used on the current page */
    public $active_types = array();

    /* (boolean) Whether to enable FacetWP for the current page */
    public $load_assets = false;

    /* (array) Scripts and stylesheets to enqueue */
    public $assets = array();

    /* (array) Data to pass to front-end JS */
    public $json = array();


    function __construct() {
        add_filter( 'widget_text', 'do_shortcode' );
        add_action( 'wp_footer', array( $this, 'front_scripts' ), 25 );
        add_shortcode( 'facetwp', array( $this, 'shortcode' ) );
    }


    /**
     * Register shortcodes
     */
    function shortcode( $atts ) {
        $output = '';
        if ( isset( $atts['facet'] ) ) {
            foreach ( FWP()->helper->get_facets() as $facet ) {
                if ( $atts['facet'] == $facet['name'] ) {
                    $output = '<div class="facetwp-facet facetwp-facet-' . $facet['name'] . ' facetwp-type-' . $facet['type'] . '" data-name="' . $facet['name'] . '" data-type="' . $facet['type'] . '"></div>';

                    // Build list of active facet types
                    if ( ! in_array( $facet['type'], $this->active_types ) ) {
                        $this->active_types[] = $facet['type'];
                    }

                    $this->load_assets = true;
                }
            }
        }
        elseif ( isset( $atts['template'] ) ) {
            foreach ( FWP()->helper->get_templates() as $template ) {
                if ( $atts['template'] == $template['name'] ) {
                    global $wp_query;

                    // Preload the template (search engine visible)
                    $temp_query = $wp_query;
                    $preload_data = FWP()->ajax->get_preload_data( $template['name'] );
                    $wp_query = $temp_query;

                    $output = '<div class="facetwp-template" data-name="' . $atts['template'] . '">';
                    $output .= $preload_data['template'];
                    $output .= '</div>';

                    $this->load_assets = true;
                }
            }
        }
        elseif ( isset( $atts['sort'] ) ) {
            $output = '<div class="facetwp-sort"></div>';
        }
        elseif ( isset( $atts['selections'] ) ) {
            $output = '<div class="facetwp-selections"></div>';
        }
        elseif ( isset( $atts['counts'] ) ) {
            $output = '<div class="facetwp-counts"></div>';
        }
        elseif ( isset( $atts['pager'] ) ) {
            $output = '<div class="facetwp-pager"></div>';
        }
        elseif ( isset( $atts['per_page'] ) ) {
            $output = '<div class="facetwp-per-page"></div>';
        }

        $output = apply_filters( 'facetwp_shortcode_html', $output, $atts );

        return $output;
    }


    /**
     * Output facet scripts
     */
    function front_scripts() {

        // Not enqueued - front.js needs to load before front_scripts()
        if ( true === apply_filters( 'facetwp_load_assets', $this->load_assets ) ) {
            if ( true === apply_filters( 'facetwp_load_css', true ) ) {
                $this->assets['front.css'] = FACETWP_URL . '/assets/css/front.css';
            }

            $this->assets['event-manager.js'] = FACETWP_URL . '/assets/js/src/event-manager.js';
            $this->assets['front.js'] = FACETWP_URL . '/assets/js/front.js';
            $this->assets['front-facets.js'] = FACETWP_URL . '/assets/js/front-facets.js';

            // Use the REST API?
            $ajaxurl = admin_url( 'admin-ajax.php' );
            if ( function_exists( 'get_rest_url' ) && apply_filters( 'facetwp_use_rest_api', true ) ) {
                $ajaxurl = get_rest_url() . 'facetwp/v1/refresh';
            }

            // Pass GET and URI params
            $http_params = array(
                'get' => $_GET,
                'uri' => FWP()->helper->get_uri()
            );

            // See FWP()->facet->get_query_args()
            if ( ! empty( FWP()->facet->archive_args ) ) {
                $http_params['archive_args'] = FWP()->facet->archive_args;
            }

            // Set the loading animation
            $this->json['loading_animation'] = FWP()->helper->get_setting( 'loading_animation' );
            $this->json['ajaxurl'] = $ajaxurl;
            $this->json['nonce'] = wp_create_nonce( 'wp_rest' );

            ob_start();

            foreach ( $this->active_types as $type ) {
                $facet_class = FWP()->helper->facet_types[ $type ];
                if ( method_exists( $facet_class, 'front_scripts' ) ) {
                    $facet_class->front_scripts();
                }
            }

            $inline_scripts = ob_get_clean();
            $assets = apply_filters( 'facetwp_assets', $this->assets );

            foreach ( $assets as $slug => $url ) {
                $html = '<script src="{url}"></script>';

                if ( 'css' == substr( $slug, -3 ) ) {
                    $html = '<link href="{url}" rel="stylesheet">';
                }

                if ( false !== strpos( $url, 'facetwp' ) ) {
                    $url .= '?ver=' . FACETWP_VERSION;
                }

                echo str_replace( '{url}', $url, $html ) . "\n";
            }

            echo $inline_scripts;
?>
<script>
var FWP_JSON = <?php echo json_encode( $this->json ); ?>;
var FWP_HTTP = <?php echo json_encode( $http_params ); ?>;
</script>
<?php
        }
    }
}
