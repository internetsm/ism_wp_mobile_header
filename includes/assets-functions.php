<?php

add_action('wp_footer', function () {
    wp_enqueue_style('ism_mobile_header_fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style('ism_mobile_header_css', ISMMH_ASSETS_URL . "/ism-mobile-header.css");
});