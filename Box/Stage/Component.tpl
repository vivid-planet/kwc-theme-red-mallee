<div class="<?=$this->cssClass;?>">
    <div class="listWrapper">
        <? foreach ($this->listItems as $child) { ?>
        <div class="<?=$child['class'];?>" style="<?=$child['style'];?>">
            <?=$this->component($child['data']);?>
        </div>
        <? } ?>
    </div>
</div>