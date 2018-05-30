<?php

namespace IsmMobileHeader\Helper;

class OptionsHelper
{

    const PHONE1_KEY = "_ism_mobile_header_phone1";
    const PHONE2_KEY = "_ism_mobile_header_phone2";

    const WHATSAPP1_KEY = "_ism_mobile_header_whatsapp1";
    const WHATSAPP2_KEY = "_ism_mobile_header_whatsapp2";

    const CELLPHONE1_KEY = "_ism_mobile_header_cellphone1";
    const CELLPHONE2_KEY = "_ism_mobile_header_cellphone2";

    const EMAIL1_KEY = "_ism_mobile_header_email1";
    const EMAIL2_KEY = "_ism_mobile_header_email2";

    const FACEBOOK_KEY = "_ism_mobile_header_facebook";
    const INSTAGRAM_KEY = "_ism_mobile_header_instagram";
    const YOUTUBE_KEY = "_ism_mobile_header_youtube";
    const LINKEDIN_KEY = "_ism_mobile_header_linkedin";
    const TWITTER_KEY = "_ism_mobile_header_twitter";
    const PINTEREST_KEY = "_ism_mobile_header_pinterest";
    const VKONTAKTE_KEY = "_ism_mobile_header_vkontakte";

    const BAR_BOTTOM_POSITION_KEY = "_ism_mobile_header_bar_bottom_position";
    const USE_FONTAWESOME_KEY = "_ism_mobile_header_use_fontawesome";

    /**
     * @return array
     */
    public static function getDetailFields()
    {
        return [
            self::PHONE1_KEY,
            self::PHONE2_KEY,
            self::WHATSAPP1_KEY,
            self::WHATSAPP2_KEY,
            self::CELLPHONE1_KEY,
            self::CELLPHONE2_KEY,
            self::EMAIL1_KEY,
            self::EMAIL2_KEY,
            self::FACEBOOK_KEY,
            self::INSTAGRAM_KEY,
            self::YOUTUBE_KEY,
            self::LINKEDIN_KEY,
            self::TWITTER_KEY,
            self::PINTEREST_KEY,
            self::VKONTAKTE_KEY,
        ];
    }

    /**
     * @return array
     */
    public static function getGeneralFields()
    {
        return [
            self::BAR_BOTTOM_POSITION_KEY,
            self::USE_FONTAWESOME_KEY,
        ];
    }

}