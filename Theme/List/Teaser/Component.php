<?php
class Theme_List_Teaser_Component extends Kwc_Abstract_List_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlStatic('Teaser Liste');
        $ret['cssClass'] = ' webStandard';
        $ret['generators']['child']['component'] = 'Theme_List_Teaser_Item_Component';
        $ret['assets']['dep'][] = 'KwfResponsiveEl';
        return $ret;
    }
}
