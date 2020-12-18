<?php
function wordpress_theme_features(){
	add_theme_support('title-tag');
}

add_action('after_setup_theme', 'wordpress_theme_features');
?>