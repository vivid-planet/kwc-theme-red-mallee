<?php
class Theme_Home_Component extends Kwc_Paragraphs_Component
{

    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = 'Home';
        $ret['contentWidth'] = 1100;
        $ret['flags']['resetMaster'] = true;
        return $ret;
    }

}