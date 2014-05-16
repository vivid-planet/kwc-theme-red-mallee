<?php
class Theme_Box_Stage_Image_Component extends Kwc_Basic_Image_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlKwfStatic('Mobile Stage');
        $ret['dimensions'] = array(
            'fullWidth'=>array(
                'text' => trlKwf('full width'),
                'width' => 1100,
                'height' => 337,
                'cover' => true
            ),
        );
        return $ret;
    }
}
