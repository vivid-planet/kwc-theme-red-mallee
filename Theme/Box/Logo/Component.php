<?php
class Theme_Box_Logo_Component extends Kwc_Basic_Image_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlKwfStatic('Logo');
        $ret['dimensions'] = array(
            'customcrop'=>array(
                'text' => trlKwf('user-defined'),
                'width' => 293,
                'height' => 91,
                'cover' => false
            )
        );
        return $ret;
    }
}
