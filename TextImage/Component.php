<?php 
class Theme_TextImage_Component extends Kwc_TextImage_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['generators']['child']['component']['image'] = 'Theme_TextImage_Image_Component';
        return $ret;
    }
}
