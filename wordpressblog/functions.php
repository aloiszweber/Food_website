<?php

function my_script() {
    wp_register_script('script', get_template_directory_uri() . './js/script.js', '', false, true);
    wp_enqueue_script('script');
}

add_action('wp_enqueue_scripts', 'my_script');

?>