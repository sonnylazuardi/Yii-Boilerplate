<?php
Yii::app()->clientScript
    ->registerCoreScript('jquery')
    ->registerCssFile('css/bootstrap.css')
    ->registerCssFile('css/bootstrap-responsive.css')
    ->registerCssFile('css/basic.css')
    ->registerScriptFile('js/script.js', CClientScript::POS_END)
    ->registerScriptFile('js/bootstrap-transition.js', CClientScript::POS_END)
    ->registerScriptFile('js/bootstrap-alert.js', CClientScript::POS_END)
    ->registerScriptFile('js/bootstrap-modal.js', CClientScript::POS_END)
    ->registerScriptFile('js/bootstrap-dropdown.js', CClientScript::POS_END)
    ->registerScriptFile('js/bootstrap-scrollspy.js', CClientScript::POS_END)
    ->registerScriptFile('js/bootstrap-tab.js', CClientScript::POS_END)
    ->registerScriptFile('js/bootstrap-tooltip.js', CClientScript::POS_END)
    ->registerScriptFile('js/bootstrap-popover.js', CClientScript::POS_END)
    ->registerScriptFile('js/bootstrap-button.js', CClientScript::POS_END)
    ->registerScriptFile('js/bootstrap-collapse.js', CClientScript::POS_END)
    ->registerScriptFile('js/bootstrap-carousel.js', CClientScript::POS_END)
    ->registerScriptFile('js/bootstrap-typeahead.js', CClientScript::POS_END)
    ;
?>
<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language ?>">
  <head>
    <base href="<?php echo Yii::app()->request->hostInfo . Yii::app()->baseUrl ?>/">
    <meta charset="<?php echo Yii::app()->charset ?>">
    <title><?php echo CHtml::encode($this->pageTitle) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php  echo $this->renderPartial('//layouts/_topnav') ?>
    <div class="container">
        <?php if (! empty($this->breadcrumbs)) : ?>
            <div class="breadcrumb">
            <?php $this->widget(
                'zii.widgets.CBreadcrumbs',
                array(
                    'links' => $this->breadcrumbs
                )
            ); ?>
            </div>
        <?php endif ?>
        <?php echo $this->renderPartial('//layouts/_infobar') ?>
        <?php echo $content ?>

        <footer>
        <p>© <?php echo date('Y') ?> Your company. <?php echo Yii::powered() ?> </p>
        </footer>
    </div>
  </body>
</html>

