<?php
/*
Plugin Name: Favicon Plugin
Plugin URI:
Description: Adds a favicon to your page.
interface
Version: 1.0
Author: Stephen Punwasi
License: GPLv2
*/

add_action('wp_head', 'icon_page_output');
function icon_page_output(){
  $icon_url = plugins_url('favicon.ico', __FILE__);
  ?>
  <link rel="shortcut icon" href="<?php echo $icon_url; ?>"/>
  <?php
}

?>
