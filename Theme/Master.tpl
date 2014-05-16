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
                <? if($this->hasContent($this->boxes['stage'])) { ?>
                <div class="stage">
                    <?=$this->component($this->boxes['stage']);?>
                </div>
                <? } ?>
                <div id="content" class="<? if($this->hasContent($this->boxes['stage'])) { ?>hasStage<? } ?>">
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
                <? if($this->hasContent($this->boxes['teaserBelowContent'])) { ?>
                <div class="teaserList">
                    <div class="innerTeaserList">
                        <?=$this->component($this->boxes['teaserBelowContent']);?>
                    </div>
                </div>
                <? } ?>
            </div>
            <div id="outerFooter">
                <div id="footer" class="webStandard">
                    &copy; <?=date('Y')?>
                </div>
            </div>
        </div>
        <?=$this->includeCode('footer')?>
    </body>
</html>
