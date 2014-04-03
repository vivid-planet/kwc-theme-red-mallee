<?
    // Make class regarding boxes .. todo: place this into component.php not here
    $contentClass = 'oneColumn';
    $leftColumn =  ($this->hasContent($this->boxes['subMenu']) || $this->hasContent($this->boxes['leftColumnBox'])) ? true : false;
    $rightColumn = $this->hasContent($this->boxes['rightBox']) ? true : false;

    if ($leftColumn && $rightColumn) {
        $contentClass = 'threeColumns';
    } else if ($leftColumn && !$rightColumn) {
        $contentClass = 'twoColumnsLeft';
    } else if (!$leftColumn && $rightColumn) {
        $contentClass = 'twoColumnsRight';
    }
?>

<?=$this->doctype('XHTML1_STRICT');?>
<!--[if lt IE 9 ]><html xmlns="http://www.w3.org/1999/xhtml" class="no-mediaqueries"> <![endif]-->
<!-- [if !(lt IE 9)]> -->
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- <![endif] -->
    <head>
        <?=$this->includeCode('header')?>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,100,500' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    </head>
    <body class="<?=$this->cssClass?>">
        <div id="outerBg">
            <?=$this->component($this->boxes['background']);?>
        </div>
        <div id="page" class="<? if($this->hasContent($this->boxes['background'])) { ?>hasBackground<? } ?>">
            <div id="outerHeader">
                <div id="header">
                    <div class="rightHeaderBox">
                        <?=$this->component($this->boxes['rightHeaderBox']);?>
                    </div>
                    <div class="logo">
                        <a href="/">
                            <?=$this->component($this->boxes['logo']);?>
                        </a>
                    </div>
                    <div class="rightBox">
                        <div class="mainMenu">
                            <?=$this->component($this->boxes['mainMenu']);?>
                        </div>
                        <div class="languageMenu">
                            <?=$this->component($this->boxes['languageMenu']);?>
                        </div>
                        <div class="verticalMenu">
                            <?=$this->component($this->boxes['verticalMenu']);?>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="subMenus">
                        <div class="subMenuHorizontal">
                            <?=$this->component($this->boxes['subMenuHorizontal']);?>
                        </div>
                        <div class="subSubMenuHorizontal">
                            <?=$this->component($this->boxes['subSubMenuHorizontal']);?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="outerContent">
                <div class="stage">
                    <?=$this->component($this->boxes['stage']);?>
                </div>
                <div id="content">
                    <div id="innerContent" class="<?=$contentClass?>">
                        <div class="leftColumn">
                            <?=$this->component($this->boxes['leftColumnBox']);?>
                            <?=$this->component($this->boxes['subMenu']);?>
                        </div>
                        <div class="centerColumn">
                            <?=$this->componentWithMaster($this->componentWithMaster);?>
                        </div>
                        <div class="rightColumn">
                            <?=$this->component($this->boxes['rightBox']);?>
                        </div>
                    </div>
                </div>
                <div class="teaserList">
                    <div class="innerTeaserList">
                        <?=$this->component($this->boxes['teaserBelowContent']);?>
                    </div>
                </div>
            </div>
            <div id="outerFooter">
                <div id="footer">
                    <div class="topFooter">
                        <div class="text">
                            <p class="webStandard">HOTEL RESTAURANT LASCHENSKYHOF    Josef-Hauthaler-Str. 2     5071 Wals     Tel: +43 662 85 23 61     <a href="mailto:info@laschenskyhof.at">info@laschenskyhof.at</a></p> 
                        </div>
                        <div class="bottomMenu">
                                <?=$this->component($this->boxes['bottomMenu']);?>
                        </div>
                    </div>
                    <div class="references">
                        <?=$this->image('/assets/web/themes/Theme/images/reference1.jpg', 'reference', 'referenceItem'); ?>
                        <?=$this->image('/assets/web/themes/Theme/images/reference2.jpg', 'reference', 'referenceItem'); ?>
                        <?=$this->image('/assets/web/themes/Theme/images/reference3.jpg', 'reference', 'referenceItem'); ?>
                    </div>
                    <div class="facebook">
                        <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FLaschensky%2F192010854169157%3Ffref%3Dts&amp;width=250&amp;height=80&amp;colorscheme=light&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;send=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:80px;" allowTransparency="true"></iframe>
                    </div>
                </div>
            </div>
            <?=$this->includeCode('footer')?>
        </div>
    </body>
</html>
