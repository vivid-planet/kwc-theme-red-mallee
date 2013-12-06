<?php
class Theme_Home_Trl_Component extends Kwc_Paragraphs_Trl_Component
{
    public static function getSettings($masterComponentClass)
    {
        $ret = parent::getSettings($masterComponentClass);
        $ret['cssClass'] = 'ThemeHome';
        $ret['flags']['resetMaster'] = true;
        return $ret;
    }
}
