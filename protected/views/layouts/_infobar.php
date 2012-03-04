<?php
$cs = Yii::app()->clientScript;
$user = Yii::app()->user;
$loadjQuery = false;

foreach (Yii::app()->params['infobarLevels'] as $level) : ?>
    <?php if ($user->hasFlash($level)) : ?>
    <?php $loadjQuery = true ?>
    <div class="alert alert-<?php echo $level ?>">
        <a class="close" data-dismiss="alert">×</a>
        <?php echo CHtml::encode($user->getFlash($level)); ?>
    </div>
    <?php endif ?>
<?php endforeach ?>
<?php if (true === $loadjQuery) {
    $cs->registerCoreScript('jquery');
}
