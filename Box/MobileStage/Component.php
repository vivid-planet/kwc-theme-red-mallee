<?php
class Theme_Box_MobileStage_Component extends Kwc_Basic_Image_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlKwfStatic('Mobile Stage');
        $ret['assets']['files'][] = 'web/themes/Theme/Box/Logo/Component.js';
        $ret['dimensions'] = array(
            'fullWidth'=>array(
                'text' => trlKwf('full width'),
                'width' => self::CONTENT_WIDTH,
                'height' => 0,
                'cover' => false 
            ),
        );
        return $ret;
    }
}
