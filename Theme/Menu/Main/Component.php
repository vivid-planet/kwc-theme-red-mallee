<?php
class Theme_Menu_Main_Component extends Kwc_Menu_DropdownMask_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['level'] = 'main';
        $ret['cssClass'] .= ' webListNone';
        $ret['generators']['subMenu'] = array(
            'class' => 'Kwc_Menu_Generator',
            'component' => 'Theme_Menu_SubDropdown_Component'
        );
        return $ret;
    }
}