<?php
class Theme_Gallery_Component extends Kwc_List_Gallery_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['contentWidth'] = 1100;
        return $ret;
    }
}