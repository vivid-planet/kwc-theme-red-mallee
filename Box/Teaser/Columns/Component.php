<?php
class Theme_Box_Teaser_Columns_Component extends Kwc_ColumnsResponsive_Component
{
    public static function getSettings($parentComponentClass)
    {
        $ret = parent::getSettings($parentComponentClass);
        $ret['generators']['child']['component'] = 'Kwc_Paragraphs_Component';
        return $ret;
    }
}
