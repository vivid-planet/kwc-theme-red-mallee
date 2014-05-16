<?php
class Theme_Component extends Kwf_Component_Theme_Abstract
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = 'Theme';
        $ret['flags']['resetMaster'] = true;
        $ret['classFile'] = 'testClass';
        return $ret;
    }

    public static function getRootSettings()
    {
        $ret = array();
        $ret['masterTemplate'] = dirname(__FILE__).'/Master.tpl';
        $ret['contentWidth'] = 1100;
        $ret['contentWidthBoxSubtract'] = array('subMenu' => 282);
        $ret['flags']['resetMaster'] = true;

        $ret['generators']['box'] = array(
            'class' => 'Kwf_Component_Generator_Box_Static',
            'component' => array(
                'mainMenu' => 'Theme_Menu_Main_Component',
                'verticalMenu' => 'Theme_Menu_MainVertical_Component',
                'subMenu' => 'Theme_Menu_Sub_Component',
                'subMenuHorizontal' => 'Theme_Menu_SubHorizontal_Component',
                'subSubMenuHorizontal' => 'Theme_Menu_SubSubHorizontal_Component',
                'subSubMenu' => 'Theme_Menu_SubSub_Component',
                'bottomMenu' => 'Theme_Menu_Bottom_Component',
                'topMenu' => 'Theme_Menu_Top_Component'
            ),
            'inherit' => true,
        );
        $ret['generators']['logo'] = array(
            'class' => 'Kwf_Component_Generator_Box_Static',
            'component' => array(
                'logo' => 'Theme_Box_Logo_Component'
            ),
            'inherit' => true,
            'unique' => true
        );

        $ret['generators']['rightHeaderBox'] = array(
            'class' => 'Kwf_Component_Generator_Box_Static',
            'component' => 'Kwc_Basic_Empty_Component',
            'unique' => true,
            'inherit' => true
        );

        $ret['generators']['leftColumnBox'] = array(
            'class' => 'Kwf_Component_Generator_Box_Static',
            'component' => 'Kwc_Basic_None_Component',
            'unique' => true,
            'inherit' => true
        );

        $ret['generators']['footerImage'] = array(
            'class' => 'Kwf_Component_Generator_Box_Static',
            'component' => array(
                'footerImage' => 'Theme_Box_Footer_Component'
            ),
            'inherit' => true,
            'unique' => true
        );
        $ret['generators']['box']['component']['metaTags'] = 'Kwc_Box_MetaTagsContent_Component';
        $ret['generators']['title'] = array(
            'class' => 'Kwf_Component_Generator_Box_Static',
            'component' => 'Kwc_Box_TitleEditable_Component',
            'inherit' => true,
        );
        $ret['generators']['openGraph'] = array(
            'class' => 'Kwf_Component_Generator_Box_StaticSelect',
            'component' => array(
                    'parentContent' => 'Kwc_Basic_ParentContent_Component',
                    'openGraph' => 'Kwc_Box_OpenGraph_Component'
            ),
            'inherit' => true,
            'boxName' => 'Open Graph'
        );

        $ret['generators']['rightBox'] = array(
            'class' => 'Kwf_Component_Generator_Box_Static',
            'component' => 'Kwc_Basic_None_Component',
            'unique' => true,
            'inherit' => true
        );

        $ret['generators']['background'] = array(
            'class' => 'Kwf_Component_Generator_Box_StaticSelect',
            'component' => array(
                'parentContent' => 'Kwc_Basic_ParentContent_Component',
                'background'        => 'Kwc_Box_BackgroundImage_Component',
            ),
            'inherit' => true,
            'boxName' => trlStatic('Hintergrundbild')
        );
        $ret['generators']['mobileStage'] = array(
            'class' => 'Kwf_Component_Generator_Box_StaticSelect',
            'component' => array(
                'parentContent' => 'Kwc_Basic_ParentContent_Component',
                'mobileStage'        => 'Theme_Box_MobileStage_Component',
            ),
            'inherit' => true,
            'boxName' => trlStatic('Mobile Stage')
        );
        $ret['generators']['stage'] = array(
            'class' => 'Kwf_Component_Generator_Box_StaticSelect',
            'component' => array(
                'parentContent' => 'Kwc_Basic_ParentContent_Component',
                'stage'        => 'Theme_Box_Stage_Component',
            ),
            'inherit' => true,
            'boxName' => trlStatic('Stage')
        );

        $ret['generators']['teaserBelowContent'] = array(
            'class' => 'Kwf_Component_Generator_Box_StaticSelect',
            'component' => array(
                'parentContent' => 'Kwc_Basic_ParentContent_Component',
                'teaser'        => 'Theme_Box_Teaser_Component'
            ),
            'inherit' => true,
            'boxName' => trlStatic('Teaser unter Content')
        );

        $ret['editComponents'] = array('title', 'metaTags', 'logo', 'openGraph', 'leftColumnBox', 'background', 'footerImage', 'mobileStage', 'stage', 'teaserBelowContent', 'rightBox', 'newsletterSubscribe');

        $ret['assets']['files'][] = 'webTheme/Theme/Web.css';
        $ret['assets']['files'][] = 'webTheme/Theme/Master.scss';
        $ret['assets']['files'][] = 'webTheme/Theme/Web.scss';
        $ret['assets']['dep'][] = 'KwfStickyHeader';
        $ret['assets']['files'][] = 'webTheme/Theme/Master.js';
        return $ret;
    }
}
