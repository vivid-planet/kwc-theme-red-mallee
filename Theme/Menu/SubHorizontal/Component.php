<?php
class Theme_Menu_SubHorizontal_Component extends Kwc_Menu_ScrollButtons_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['level'] = 2;
        $ret['cssClass'] .= ' webListNone';
        return $ret;
    }
}
