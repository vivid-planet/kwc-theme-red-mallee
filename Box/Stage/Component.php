<?php
class Theme_Box_Stage_Component extends Kwc_Abstract_List_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlKwfStatic('Stage');
        $ret['generators']['child']['component'] = 'Theme_Box_Stage_Image_Component';
        $ret['assets']['files'][] = 'web/themes/Theme/Box/Stage/Component.js';
        $ret['assets']['files'][] = 'web/themes/Theme/Box/Stage/Hammer.js';
        $ret['assets']['files'][] = 'web/themes/Theme/Box/Stage/Carousel.js';
        $ret['assets']['files'][] = 'web/themes/Theme/Box/Stage/NextPreviousLinks.js';
        $ret['assets']['dep'][] = 'KwfList';
        return $ret;
    }
}
