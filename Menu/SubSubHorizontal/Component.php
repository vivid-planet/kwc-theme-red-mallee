<?php
class Theme_Menu_SubSubHorizontal_Component extends Kwc_Menu_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['level'] = 3;
        $ret['cssClass'] .= ' webListNone';
        $ret['assets']['files'][] = 'web/themes/Theme/Menu/SubSubHorizontal/Component.js';
        return $ret;
    }
}