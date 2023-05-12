<?php
/*
Plugin Name: WhatsApp Chat WP
Plugin URI: https://caporalmktdigital.com.br/plataformas/plugin-whatsapp-chat-wp/
Description: Inicie uma conversa no whatsapp direto de seu site.
Author: Alexandre Caporal
Author URI: https://caporalmktdigital.com.br/
Version: 1.5
License: GPLv2
*/

if ( ! defined( 'ABSPATH' ) )
	exit;

function whatsapp_chat_menu() {
	add_options_page('WhatsApp Chat Settings', 'WhatsApp Chat', 'administrator', 'whatsapp-chat-settings', 'whatsapp_chat_settings_page');
}
add_action('admin_menu', 'whatsapp_chat_menu');

function whatsapp_chat_settings_page() { ?>
<div class="wrap">
<h2>WhatsApp Chat WP</h2>
<h3>Inicie uma conversa no whatsapp direto de seu site.</h3>
<form method="post" action="options.php">
    <?php
		settings_fields( 'whatsapp-chat-settings' );
		do_settings_sections( 'whatsapp-chat-settings' );
	?>
	<!-- WP Img Uploader -->
	<script>
    jQuery(document).ready(function($){
    var custom_uploader;
    $('#whatsapp_chat_upload_image_button').click(function(e) {
        e.preventDefault();
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: true
        });
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            console.log(custom_uploader.state().get('selection').toJSON());
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#whatsapp_chat_upload_image').val(attachment.url);
        });
        //Open the uploader dialog
        custom_uploader.open();
    });
	});
	</script>
	<!-- WP Img Uploader - END -->
	
    <table class="form-table">
        <tr valign="top">
			<th scope="row"><label for="whatsapp_chat_page">Número do whatsapp</label></th>
			<td>
				<input type="text" size="30" name="whatsapp_chat_page" value="<?php echo esc_attr( get_option('whatsapp_chat_page') ); ?>" /> <small>Ex. +5512999999999<br />Note que é preciso preencher o número no modelo internacional +código-do-pais (55 para Brasil) DDD de sua cidade e número completo.</small>
			</td>
        </tr>
		<tr valign="top">
			<th scope="row"><label for="whatsapp_chat_msg">Mensagem para iniciar conversa</label></th>
			<td>
				<input type="text" size="60" name="whatsapp_chat_msg" value="<?php echo esc_attr( get_option('whatsapp_chat_msg') ); ?>" /> <small>Ex. Olá, gostaria de saber mais sobre seu serviço/produto.</small>
			</td>
		</tr>
		<tr valign="top">
			<th scope="row"><label for="whatsapp_chat_hide_button">Esconder Chat</label></th>
			<td>
				<input type="checkbox" name="whatsapp_chat_hide_button" value="true" <?php echo ( get_option('whatsapp_chat_hide_button') == true ) ? ' checked="checked" />' : ' />'; ?>
			</td>
		</tr>
		<tr valign="top">
			<th scope="row"><label for="whatsapp_chat_left_side">Chat do lado esquerdo</label></th>
			<td>
				<input type="checkbox" name="whatsapp_chat_left_side" value="true" <?php echo ( get_option('whatsapp_chat_left_side') == true ) ? ' checked="checked" />' : ' />'; ?>
			</td>
		</tr>
		<tr valign="top">
			<th scope="row"><label for="whatsapp_chat_icon">Ícone customizado</label></th>
			<td>
				<label for="whatsapp_chat_upload_image">
					<input id="whatsapp_chat_upload_image" name="whatsapp_chat_upload_image" type="text" size="50" value="<?php echo esc_attr( get_option('whatsapp_chat_upload_image') ); ?>" /> 
					<input id="whatsapp_chat_upload_image_button" name="whatsapp_chat_upload_image_button" class="button" type="button" value="Upload Image" /><br />
					<small>Insira sua url (http://) ou faça upload da imagem. <i><a href="<?php echo plugins_url( 'images/whatsapp-chat-icons.zip', __FILE__ ) ?>"></small>
				</label>
			</td>
		</tr>
		<tr valign="top">
			<th scope="row"><label for="whatsapp_chat_powered_by">Discreto link 'desenvolvido por'</label></th>
			<td>
				<input type="checkbox" name="whatsapp_chat_powered_by" value="true" <?php echo ( get_option('whatsapp_chat_powered_by') == true ) ? ' checked="checked" />' : ' />'; ?><br /><small>Agradecemos se puder contribuir com a agência <a href="https://caporalmktdigital.com.br/">Caporal Mkt Digital</a>, estamos sempre em busca de desenvolver novas ferramentas e estratégias gratuitas para os pequenos negócios online.</small>
			</td>
		</tr>
    </table>
    <?php submit_button(); ?>
</form>
<p>Plugin desenvolvido por <a href="https://caporalmktdigital.com.br/"><img width="55" style="vertical-align:middle" src="<?php echo plugins_url( 'images/caporalmktdigital.png', __FILE__ ) ?>" alt="Agência de planejamento estratégico digital"></a></p>
</div>
<?php }

function whatsapp_chat_settings() {
	register_setting( 'whatsapp-chat-settings', 'whatsapp_chat_page' );
	register_setting( 'whatsapp-chat-settings', 'whatsapp_chat_msg' );
	register_setting( 'whatsapp-chat-settings', 'whatsapp_chat_hide_button' );
	register_setting( 'whatsapp-chat-settings', 'whatsapp_chat_left_side' );
	register_setting( 'whatsapp-chat-settings', 'whatsapp_chat_upload_image' );
	register_setting( 'whatsapp-chat-settings', 'whatsapp_chat_upload_image_button' );
	register_setting( 'whatsapp-chat-settings', 'whatsapp_chat_powered_by' );
}
add_action( 'admin_init', 'whatsapp_chat_settings' );

function whatsapp_chat_deactivation() {
    delete_option( 'whatsapp_chat_page' );
    delete_option( 'whatsapp_chat_msg' );
    delete_option( 'whatsapp_chat_hide_button' );
    delete_option( 'whatsapp_chat_left_side' );
    delete_option( 'whatsapp_chat_upload_image' );
    delete_option( 'whatsapp_chat_upload_image_button' );
    delete_option( 'whatsapp_chat_powered_by' );
}
register_deactivation_hook( __FILE__, 'whatsapp_chat_deactivation' );

function whatsapp_chat_dependencies() {
	wp_register_script( 'whatsapp-chat-index', '', true );
	wp_enqueue_script( 'whatsapp-chat-index' );
	wp_register_style( 'whatsapp-chat-style', plugins_url('css/style.css', __FILE__) );
	wp_enqueue_style( 'whatsapp-chat-style' );
}
add_action( 'wp_enqueue_scripts', 'whatsapp_chat_dependencies' );

//WP Img Uploader
function whatsapp_chat_admin_scripts() {
    if (isset($_GET['page']) && $_GET['page'] == 'whatsapp-chat-settings') {
        wp_enqueue_media();
        wp_register_script('whatsapp-chat-admin-js',"");
        wp_enqueue_script('whatsapp-chat-admin-js');
    }
}
add_action('admin_enqueue_scripts', 'whatsapp_chat_admin_scripts');

function whatsapp_chat() { ?>

<?php if (get_option('whatsapp_chat_hide_button') != true) {
$whatsapp_chat_upload_image = get_option( 'whatsapp_chat_upload_image' );
if ( empty( $whatsapp_chat_upload_image ) ) $whatsapp_chat_upload_image = plugins_url( 'images/whatsapp-chat.png', __FILE__ );
?>
<div id="wacht<?php if (get_option('whatsapp_chat_left_side') == true) { ?>-leftside<?php } ?>">
	<img src="<?php echo $whatsapp_chat_upload_image; ?>" onclick="window.open('https://<?php if (wp_is_mobile() ) {echo "api";} else {echo "web";}?>.whatsapp.com/send?phone=<?php echo esc_attr( get_option('whatsapp_chat_page')); ?>&text=<?php echo esc_attr( get_option('whatsapp_chat_msg') ); ?>', '_blank');">
	<?php if (get_option('whatsapp_chat_powered_by') == true) { ?> <div style="font-size:x-small;">Desenvolvido por <a href="https://caporalmktdigital.com.br/"><span style="color: #fcbf00">Agência de planejamento estratégico digital</span></a></div> <?php } ?>
</div>
<?php }//hide_button ?>
<?php
}
add_action( 'wp_footer', 'whatsapp_chat', 10 );