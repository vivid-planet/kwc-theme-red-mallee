<?php
class Theme_LinkButtonBig_Component extends Kwc_Basic_Link_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlStatic('Buttons.Link-Button groß');
        $ret['componentIcon'] = new Kwf_Asset('link_add');
        $ret['cssClass'] = 'webStandard';
        return $ret;
    }
}
