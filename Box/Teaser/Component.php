<?php
class Theme_Box_Teaser_Component extends Kwc_Paragraphs_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = 'Teaser unter Content';
        $ret['contentWidth'] = 1100;
        $ret['generators']['paragraphs']['component']['columns'] = 'Theme_Box_Teaser_Columns_Component';
        return $ret;
    }
}
