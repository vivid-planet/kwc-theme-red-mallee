<?php
class Theme_TextImage_Image_Component extends Kwc_TextImage_ImageEnlarge_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['dimensions'] = array(
            'default'=>array(
                'width' => 300,
                'height' => 200,
                'cover' => true
            ),
            'fullWidth'=>array(
                'text' => trlKwf('full width'),
                'width' => self::CONTENT_WIDTH,
                'height' => 0,
                'cover' => true
            ),
            'halfWidth' => array(
                'text' => trlKwf('Halbe Breit - ohne Menu'),
                'width' => 535,
                'height' => 0,
                'cover' => true
            ),
            'halfWidthMenu' => array(
                'text' => trlKwf('Halbe Breit - mit Menu'),
                'width' => 394,
                'height' => 0,
                'cover' => true
            ),
            'original'=>array(
                'text' => trlKwf('original')
            ),
            'custom'=>array(
                'text' => trlKwf('user-defined'),
                'width' => self::USER_SELECT,
                'height' => self::USER_SELECT,
                'cover' => true
            ),
        );
        return $ret;
    }
}