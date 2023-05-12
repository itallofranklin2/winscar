<?php add_theme_support('post-thumbnails'); ?>
<?php set_post_thumbnail_size( 150, 113 ); ?>
 <?php function register_my_menu() {
  register_nav_menu('header-menu',__( 'menu-header' ));
}
add_action( 'init', 'register_my_menu' ); ?>
<?php class description_walker extends Walker_Nav_Menu
{
      function start_el(&$output, $item, $depth, $args)
      {
           global $wp_query;
           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $class_names = $value = '';

           $classes = empty( $item->classes ) ? array() : (array) $item->classes;

           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
           $class_names = ' class="'. esc_attr( $class_names ) . '"';

           $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

           $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
           $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
           $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
           $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

           $prepend = '<strong>';
           $append = '</strong>';
           $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

           if($depth != 0)
           {
                     $description = $append = $prepend = "";
           }

            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
            $item_output .= $description.$args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            }
}?>




<?php
// Register Custom Post Type 
function custom_post_type() {
	$labels = array(
		'name'                  => 'Carro',
		'singular_name'         => _x( 'Carro', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Carro', 'text_domain' ),
		'name_admin_bar'        => __( 'Carro', 'text_domain' ),
		'archives'              => __( 'Arquivo', 'text_domain' ),
		'parent_item_colon'     => __( 'Item pai:', 'text_domain' ),
		'all_items'             => __( 'Todos os Itens', 'text_domain' ),
		'add_new_item'          => __( 'Adicionar Novo Item', 'text_domain' ),
		'add_new'               => __( 'Adicionar Novo', 'text_domain' ),
		'new_item'              => __( 'Novo Item', 'text_domain' ),
		'edit_item'             => __( 'Editar Item', 'text_domain' ),
		'update_item'           => __( 'Atualizar Item', 'text_domain' ),
		'view_item'             => __( 'Ver Item', 'text_domain' ),
		'search_items'          => __( 'Buscar Item', 'text_domain' ),
		'not_found'             => __( 'Não Encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'Não Encontrado no Lixo', 'text_domain' ),
		'featured_image'        => __( 'Imagem Destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Definir imagem destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Remover imagem destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usa como imagem destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Inserir no artigo', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Carregado para este item', 'text_domain' ),
		'items_list'            => __( 'Lista de itens', 'text_domain' ),
		'items_list_navigation' => __( 'Navegação lista de itens', 'text_domain' ),
		'filter_items_list'     => __( 'Lista de itens de filtro', 'text_domain' ),
	);
	$args = array(
        'rewrite'               => array('slug' => 'carro'),
		'label'                 => __( 'Post Type', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'thumbnail', 'editor', 'title', ),
		'taxonomies'            => array( 'thumbnail', 'category', 'category-2', 'post_tag', 'marca' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'carro', $args );
}
add_action( 'init', 'custom_post_type' );
?>


<?php
function wordpress_pagination() {
            global $wp_query;
 
            $big = 999999999;
 
            echo paginate_links( array(
                  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                  'format' => '?paged=%#%',
                  'current' => max( 1, get_query_var('paged') ),
                  'total' => $wp_query->max_num_pages
            ) );
      }
?>

<?php
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );
?>    


<?php

function my_relationship_query( $args, $field, $post_id ) {
	
    // only show children of the current post being edited
    $args['post_parent'] = $post_id;
	
	
	// return
    return $args;
    
}


// filter for every field
add_filter('acf/fields/relationship/query', 'my_relationship_query', 10, 3);


// filter for a specific field based on it's name
//add_filter('acf/fields/relationship/query/name=my_relationship', 'my_relationship_query', 10, 3);


// filter for a specific field based on it's key
//add_filter('acf/fields/relationship/query/key=field_508a263b40457', 'my_relationship_query', 10, 3);

?>
<?php

add_action( 'init', 'depoimentos' );

function depoimentos() {
  $supports = array ('title','thumbnail','editor');
  register_post_type( 'depoimentos',
    array(
      'labels' => array(
        'name' => __( 'Depoimentos' ),
        'singular_name' => __( 'Depoimento' ),
        'add_new_item' => __( 'Novo depoimento' ),
        'new_item_name' => __( 'Novo depoimento' ),
        'add_new' => __( 'Novo depoimento' )
      ),

      'supports' => $supports,
      'public' => false,
      'show_ui' => true,
      'menu_position' => 5,
    )
  );
}
?>

<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>



<?php

function my_acf_prepare_field( $field ) {
	
	if( $field['value'] ) {
		
		$field['disabled'] = true;
		
	}

    return $field;
    
}


// all
// add_filter('acf/prepare_field', 'my_acf_prepare_field');

// type
// add_filter('acf/prepare_field/type=text', 'my_acf_prepare_field');

// name
add_filter('acf/prepare_field/name=my_text', 'my_acf_prepare_field');

// key
// add_filter('acf/prepare_field/key=field_508a263b40457', 'my_acf_prepare_field');

?>


<?php

add_filter('acf/prepare_field/type=select', 'add_that_all_option');
function add_that_all_option($field) {
    if (strpos($field['wrapper']['class'], 'acf-need-to-add-all-option') === false) {
        return $field;
    }

    $field['choices'] = array_merge(['' => 'All'], $field['choices']);

    return $field;
}
           ?>
