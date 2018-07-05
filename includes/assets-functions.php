<?php

add_action('wp_footer', function () {
    wp_enqueue_style('ism_mobile_header_animate_css', "https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css");
    wp_enqueue_style('ism_mobile_header_css', ISMMH_ASSETS_URL . "/css/ism-mobile-header.css");
    wp_enqueue_script('ism_mobile_header_js', ISMMH_ASSETS_URL . "/js/ismmh.js");
});

add_action('admin_head', function () {
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
});