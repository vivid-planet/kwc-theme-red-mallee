<?php
class Theme_Box_BackgroundImage_Component extends Kwc_Basic_Image_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlKwfStatic('Hintergrundbild');

        $ret['assets']['files'][] = 'web/themes/Theme/Box/BackgroundImage/Component.js';
        return $ret;
    }
    
    public function getTemplateVars()
    {
        $ret = parent::getTemplateVars();
        $ret['imageUrl'] = $this->getImageUrl();
        return $ret;
    }
}
