<?php
/*
Plugin Name: Pop-up Ads
Description: Display small windows pop-up your WordPress site.
Version: 1.0.1
Author: Nguyen Quang Chien
Author URI: http://chien.tech/
*/
add_action('admin_menu', 'wppads_admin_actions');
function wppads_admin(){
    require('wppads_admin.php');
    exit;
}
function wppads_admin_actions(){
    add_options_page('Pop-up Ads', 'Pop-up Ads', 1, 'PopupAds', 'wppads_admin');
}

//Load View
add_filter( 'wp_footer', 'wppads_add_script' );
function wppads_add_script(){
  $wppads_script = get_option('wppads_script');
  $wppads_device = get_option('wppads_device');
  switch($wppads_device){
    case 'both':
      require('wppads_view.php');
      break;
    case 'desktop':
      if(!wp_is_mobile()){ require('wppads_view.php'); }
      break;
    case 'mobile':
      if(wp_is_mobile()){ require('wppads_view.php'); }
      break;
  }
}
?>