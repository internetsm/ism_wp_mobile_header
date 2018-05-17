<?php


add_action('wp_footer', function () {

    $detailFields = [];

    foreach (\IsmMobileHeader\Helper\OptionsHelper::getDetailFields() as $name) {

        $value = get_option($name, '');

        if ($value) {

            $external = [
                \IsmMobileHeader\Helper\OptionsHelper::FACEBOOK_KEY,
                \IsmMobileHeader\Helper\OptionsHelper::INSTAGRAM_KEY,
            ];

            $target = in_array($name, $external) ? "_blank" : "_self";

            $detailFields[] = [
                'name'   => $name,
                'value'  => $value,
                'target' => $target,
                'icon'   => \IsmMobileHeader\Mapping\IconMapping::MAPPING[$name],
            ];
        }
    }

    $bottomPosition = get_option(\IsmMobileHeader\Helper\OptionsHelper::BAR_BOTTOM_POSITION_KEY, false);
    $fontawesome = get_option(\IsmMobileHeader\Helper\OptionsHelper::USE_FONTAWESOME_KEY, false);

    echo ism_mobile_header_get_template('topbar/block', [
        'detail_fields'   => $detailFields,
        'bottom_position' => $bottomPosition,
        'fontawesome'     => $fontawesome,
    ]);
});
