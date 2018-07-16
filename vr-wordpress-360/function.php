<?php
    
/*
Plugin Name: VR WordPress 360 
Plugin URI:  https://tourfacil.com
Description: Our plugin makes it easy to implement virtual reality in wordpress And facilitates understanding and integration with <a href = "https://delight-vr.com"> Delight VR</a> 
Version: 2.2
Author:      Fabricio M. Brito
Author URI:  https://twitter.com/Fabrito_Miranda
License:     PRIVADO
License URI: https://tourfacil.com/minha-conta



*/


add_action('admin_menu', 'hub_vr_options_page');


function hub_vr_options_page ()
{
    add_menu_page(
        'Realidade Virtual Wordpress',
        'VR Wordpress',
        'manage_options',
        'VR_options',
        'pone_render_page',
        plugins_url( '/vr-WordPress-360/img/360-degrees.png' ));

}



function pone_render_page(  ) { 
?> 
<iframe src="https://tourfacil.com/doc-shortcode-wordpress-vr-360/" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" 
marginheight="0px" marginwidth="0px" height="650px"  width="100%" allowfullscreen></iframe>

<?php 

}

function img_360_vr_hub( $atts , $content = null ) {

    // Attributes
    $atts = shortcode_atts(
        array(
            'poster' => '../wp-content/plugins/vr-WordPress-360/img/poster-padrao.jpg',
            'src' => '$content',
            'format' => 'MONO_360',
            'title' => '',
            'width' => '100%',
            'height' => '450px',
            'author' => '',
            'display-mode' => 'inline',
            
            
        ),
        $atts,
        'img_360_vr'
    );

        // Return image HTML code
    return '<dl8-img 
             	src="' . $content . '" 
             	title="' . $atts['title'] . '"
              	poster="' . $atts['poster'] . '"
              	display-mode="' . $atts['display-mode'] . '"
              	format="' . $atts['format'] . '"
              	width="' . $atts['width'] . '"
              	author="' .$atts['author'] . '"
              	height="' . $atts['height'] . '"
  </dl8-img> ';

}
add_shortcode( 'img_360', 'img_360_vr_hub' );



function conteudo_externo_vr_hub( $atts) {

    // Attributes
    $atts = shortcode_atts(
        array(
            'poster' => '../wp-content/plugins/vr-WordPress-360/img/poster-padrao.jpg',
            'ir' => 'https://tourfacil.com',
            'title' => '',
           
           ),
        $atts,
        'externo_vr_hub'
    );

        // Return conteudo externo HTML code
    return ' <dl8-external-content 
   url="' . $atts['ir'] . '"
   poster="' . $atts['poster'] . '"
   title="' . $atts['title'] . '"
   autostart
 >
 </dl8-external-content>';

}
add_shortcode( 'exter_360', 'conteudo_externo_vr_hub' );




function video_360_vr_hub( $atts , $content = null ) {

    // Attributes
    $atts = shortcode_atts(
        array(
            'poster' => '../wp-content/plugins/vr-WordPress-360/img/poster-padrao.jpg',
            'format' => 'MONO_360',
            'title' => '',
            'width' => '100%',
            'height' => '450px',
            'author' => '',
            'display-mode' => 'inline',
            
            
        ),
        $atts,
        'video_360_vr'
    );

        // Return video HTML code
    return '<dl8-video x-dl8-attr-category="All" title="' . $atts['title'] . '"
 author="' . $atts['author'] . '" 
format="' . $atts['format'] . '"
            poster="' . $atts['poster'] . '"
display-mode="' . $atts['display-mode'] . '" loop>
<source src="' . $content  . '"
type="video/mp4" />  </dl8-video>

  </dl8-video> ';

}
add_shortcode( 'video_360', 'video_360_vr_hub' );





function cine_360_vr( $atts, $content ) {

    // Attributes
    $atts = shortcode_atts(
        array(
            'poster' => '../wp-content/plugins/vr-WordPress-360/img/poster-padrao.jpg',
            'room-form' => 'STEREO_360_TB',
			'format' => 'MONO_FLAT',
            'title' => '',
            'width' => '100%',
            'height' => '450px',
            'author' => '',
            'display-mode' => 'fullscreen',
            'room' => '../wp-content/plugins/vr-WordPress-360/img/room.jpg',
            
            
        ),
        $atts,
        'cine_360_vr'
    );

        // Return cine 360 vr
        return '<dl8-cinema title="' . $atts['title'] . '" 
            room-src="' . $atts['room'] . '"
			format="' . $atts['format'] . '"
            room-format="' . $atts['room-form'] . '" 
            poster="' . $atts['poster'] . '"
            width="' . $atts['width'] . '"
            author="' .$atts['author'] . '"
            height="' . $atts['height'] . '"     
            display-mode="' . $atts['display-mode'] . '"
            force-show-cinema>
<source src="' . $content  . '" type="video/mp4" />
</dl8-cinema>';
    
}
add_shortcode( 'cine_360', 'cine_360_vr' );



function hub_360_vr( $atts, $content = null ) {

    // Attributes
    $atts = shortcode_atts(
        array(
            'poster' => '../wp-content/plugins/vr-WordPress-360/img/poster-padrao.jpg',
            'room-form' => 'STEREO_360_TB',
            'title' => '',
            'width' => '100%',
            'height' => '450px',
            'author' => '',
            'display-mode' => 'inline',
            'room' => '../wp-content/plugins/vr-WordPress-360/img/room.jpg',
            
            
        ),
        $atts,
        'hub_360_vr'
    );

        // Return hub 360 vr
        return '<dl8-hub
            display-mode="' . $atts['display-mode'] . '" 
            title="' . $atts['title'] . '" 
            room-src="' . $atts['room'] . '"
            room-format="' . $atts['room-form'] . '" 
            poster="' . $atts['poster'] . '"
            width="' . $atts['width'] . '"
            author="' .$atts['author'] . '"
            height="' . $atts['height'] . '" >     
   <dl8-hub-content>
   ' .   do_shortcode($content, $ignore_html = false )  . '</dl8-hub-content> <dl8-hub-vizor height="1.2" spacing="0.03" radius="2" show-home-button>
            <dl8-hub-grid view-id="main" title="" width="3.5" scroll-mode="horizontal" columns="3" rows="2" tile-padding-x="0.02" ></dl8-hub-grid></dl8-hub-vizor>
        </dl8-hub>';
    
}

add_shortcode( 'hub_360', 'hub_360_vr' );



function video_360_vr_hub_live( $atts , $content = null ) {

    // Attributes
    $atts = shortcode_atts(
        array(
            'poster' => '../wp-content/plugins/vr-WordPress-360/img/poster-padrao.jpg',
            'format' => 'MONO_360',
            'title' => '',
            'width' => '100%',
            'height' => '450px',
            'author' => '',
            'display-mode' => 'inline',
            
            
        ),
        $atts,
        'video_360_vr_live'
    );

        // Return video live HTML code
    return '<dl8-live-video x-dl8-attr-category="All" title="' . $atts['title'] . '"
 author="' . $atts['author'] . '" 
format="' . $atts['format'] . '"
            poster="' . $atts['poster'] . '"
display-mode="' . $atts['display-mode'] . '" loop>
<source src="' . $content  . '"
type="video/mp4" />  </dl8-video>

  </dl8-video> ';

}
add_shortcode( 'video_360_live', 'video_360_vr_hub_live' );



function funcao_registra_scripts() {
    wp_enqueue_script( 'token-Tour-Facil', 'https://tourfacil.com/plugin/dl8-c2d6b1450f9bff03336d32f3dfbfdcac05c3c041.js');
}
add_action( 'wp_enqueue_scripts', 'funcao_registra_scripts' );



function add_meta_tags() {
    echo '<meta name="dl8-customization-no-brand-name">';
    echo '<meta name="dl8-customization-brand-logo" content="https://tourfacil.com/wp-content/uploads/2017/01/LOGO-VR-WP-360.png">';
    echo '<meta name="dl8-customization-brand-watermark-logo" content="https://tourfacil.com/wp-content/uploads/2017/01/LOGO-VR-WP-360.png">';
    echo '<meta name="dl8-customization-brand-url"  content="https://tourfacil.com">';
}
add_action('wp_head', 'add_meta_tags');


//custom updates/upgrades
$this_file = __FILE__;
$update_check = "https://tourfacil.com/plugin/update-plugin-remote.txt";
require_once('updates.php');



?>