<?php
/*
Plugin Name: biorb Plugin
Plugin URI: https://claudebabin.referentnumerique-insarouen.fr
Description: plugin pour la certification WordPress
Author: Claude babin
Version: 1.0
Author URI: https://claudebabin.referentnumerique-insarouen.fr
*/


function Call_to_action(){
$code_html= '<p>Retrouvez nos produits sur la boutique</p>
<a href="https://claudebabin.referentnumerique-insarouen.fr/produits/"</a><input type="button"value="Aller à la boutique"</input>';

return $code_html;
}

add_shortcode ('biorb','call_to_action');