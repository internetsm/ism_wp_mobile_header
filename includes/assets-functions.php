<?php

add_action('wp_footer', function () {
    wp_enqueue_style('ism_mobile_header_css', ISMMH_ASSETS_URL . "/ism-mobile-header.css");
});