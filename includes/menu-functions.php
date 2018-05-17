<?php


add_action('admin_menu', function () {

    add_menu_page('Ism Mobile Header', 'Ism Mobile Header', 'manage_options', 'ism_wp_mobile_header', function () {


        $detailFields = [];

        foreach (\IsmMobileHeader\Helper\OptionsHelper::getDetailFields() as $name) {

            $label = str_replace("_ism_mobile_header", "", $name);
            $label = str_replace("_", " ", $label);
            $label = trim($label);
            $label = ucfirst($label);

            if (isset($_POST[$name]) && isset($_POST['submit'])) {
                update_option($name, $_POST[$name]);
            }

            $detailFields[] = [
                'label' => $label,
                'name'  => $name,
                'value' => get_option($name, ''),
            ];
        }

        $generalFields = [];
        foreach (\IsmMobileHeader\Helper\OptionsHelper::getGeneralFields() as $name) {

            $label = str_replace("_ism_mobile_header", "", $name);
            $label = str_replace("_", " ", $label);
            $label = trim($label);
            $label = ucfirst($label);

            if (isset($_POST['submit'])) {
                if (isset($_POST[$name])) {
                    update_option($name, 1);
                } else {
                    update_option($name, 0);
                }
            }

            $generalFields[] = [
                'label' => $label,
                'name'  => $name,
                'value' => get_option($name, 0),
            ];
        }

        echo ism_mobile_header_get_template('page/index', [
            'detail_fields'  => $detailFields,
            'general_fields' => $generalFields,
        ]);
    });
});