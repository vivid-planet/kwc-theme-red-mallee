<?php
class Theme_LinkButtonFullWidth_Component extends Theme_LinkButtonBig_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlStatic('Buttons.Link-Button volle Breite');
        $ret['cssClass'] = 'webStandard';
        return $ret;
    }
}
