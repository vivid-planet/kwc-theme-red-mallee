<?php
class Theme_Menu_Sub_Component extends Kwc_Menu_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['level'] = 2;
        $ret['cssClass'] .= ' webListNone';
        $ret['generators']['subMenu'] = array(
            'class' => 'Kwc_Menu_Generator',
            'component' => 'Theme_Menu_SubSub_Component'
        );
        return $ret;
    }
}