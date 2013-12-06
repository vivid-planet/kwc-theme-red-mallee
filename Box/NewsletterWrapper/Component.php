<?php
class Theme_Box_NewsletterWrapper_Component extends Kwc_Abstract_Composite_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['generators']['child']['component']['form'] = 'Theme_Box_NewsletterWrapper_NewsletterSubscribe_Component';
        $ret['assets']['dep'][] = 'KwfSwitchDisplay';
        $ret['componentName'] = trl('Newsletter Wrapper');
        return $ret;
    }
    
    public function getTemplateVars()
    {
        $ret = parent::getTemplateVars();
        $ret['form'] = $this->getData()->getChildComponent('-form');
        return $ret;
    }
}