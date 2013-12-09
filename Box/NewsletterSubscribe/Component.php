<?php
class Theme_Box_NewsletterSubscribe_Component extends Kwc_Abstract_Composite_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['generators']['child']['component']['form'] = 'Theme_Box_NewsletterSubscribe_Form_Component';
        $ret['assets']['dep'][] = 'KwfSwitchDisplay';
        $ret['componentName'] = trl('Newsletter Subscribe');
        return $ret;
    }
    
    public function getTemplateVars()
    {
        $ret = parent::getTemplateVars();
        $ret['form'] = $this->getData()->getChildComponent('-form');
        return $ret;
    }
}