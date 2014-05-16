<?php
class Theme_Box_Footer_Component extends Kwc_Basic_Image_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlStatic('Footer Bild');
        $ret['assets']['dep'][] = 'KwfResponsiveEl';
        return $ret;
    }
}

