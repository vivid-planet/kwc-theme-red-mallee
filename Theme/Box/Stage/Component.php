<?php
class Theme_Box_Stage_Component extends Kwc_List_Carousel_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['contentWidth'] = 1100;
        return $ret;
    }
}
