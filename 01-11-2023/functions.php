<?php /*

  This file is part of a child theme called Divi Child.
  Functions in this file will be loaded before the parent theme's functions.
  For more information, please read
  https://developer.wordpress.org/themes/advanced-topics/child-themes/

*/

// this code loads the parent's stylesheet (leave it in place unless you know what you're doing)

function your_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, 
      get_template_directory_uri() . '/style.css'); 

    wp_enqueue_style( 'child-style', 
      get_stylesheet_directory_uri() . '/style.css', 
      array($parent_style), 
      time() 
    );
    wp_enqueue_script('jquery-js','https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js');
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), time(), true);
    wp_enqueue_script('magnific-popup-js', get_stylesheet_directory_uri() . '/assets/js/magnific-popup.min.js');
}

add_action('wp_enqueue_scripts', 'your_theme_enqueue_styles');

/*  Add your own functions below this line.
    ======================================== */ 

    function et_pb_register_custom_video_popup_module() {
      include('includes/modules/CustomVideoPopup.php');
      include('includes/modules/CustomVideoItem.php');
  }
  add_action('et_builder_ready', 'et_pb_register_custom_video_popup_module');

  function enqueue_custom_script() {
    wp_enqueue_style( 'child-style', 
      get_stylesheet_directory_uri() . '/style.css', 
      array($parent_style), 
      time() 
    );
    

}
add_action('wp_enqueue_scripts', 'enqueue_custom_script');
  