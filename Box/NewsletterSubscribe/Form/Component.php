<?php
class Theme_Box_NewsletterSubscribe_Form_Component extends Kwc_NewsletterCategory_Subscribe_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlKwfStatic('Newsletter Anmeldung');
        $ret['componentIcon'] = new Kwf_Asset('link_add');
        $ret['cssClass'] = 'webStandard';
        $ret['extConfig'] = 'Theme_Box_NewsletterSubscribe_Form_ExtConfig';
        unset($ret['menuConfig']);
        $ret['cssClass'] = 'small';

        return $ret;
    }
    
    public function getTemplateVars()
    {
        $ret = parent::getTemplateVars();
        return $ret;
    }
}