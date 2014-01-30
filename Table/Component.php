<?php
class Theme_Table_Component extends Kwc_Basic_Table_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['tableStyles'] = array('standard' => trlKwf('Standard'));
        return $ret;
    }
    
    public function getTemplateVars()
    {
        $ret = parent::getTemplateVars();
        return $ret;
    }
}