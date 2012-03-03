<?php $this->beginContent('//layouts/main'); ?>
<div class="row">
    <div class="span2">
        <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title'=>'Operations',
            ));
            $this->widget('zii.widgets.CMenu', array(
                'items'=>$this->menu,
                'htmlOptions'=>array('class'=>'operations'),
            ));
            $this->endWidget();
        ?>
    </div>
    <div class="span10">
        <?php echo $content; ?>
    </div>
</div>
<?php $this->endContent(); ?>

