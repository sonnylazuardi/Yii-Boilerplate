<?php
$this->pageTitle = 'Contact the ' . Yii::app()->name . '-Team';
$this->breadcrumbs = array(
    $this->pageTitle,
);
?>
<div class="page-header">
    <h1><?php echo Html::encode($this->pageTitle) ?></h1>
</div>

<?php $form = $this->beginWidget('Form') ?>

<?php echo $form->errorSummary($model); ?>

<div>
    <?php echo $form->labelEx($model, 'from'); ?>
    <?php echo $form->emailField($model, 'from'); ?>
    <?php echo $form->error($model, 'from'); ?>
</div>

<div>
    <?php echo $form->labelEx($model, 'subject'); ?>
    <?php echo $form->textField($model, 'subject'); ?>
    <?php echo $form->error($model, 'subject'); ?>
</div>

<div class="controll-group error">
    <?php echo $form->labelEx($model, 'body'); ?>
    <?php echo $form->textArea($model, 'body'); ?>
    <?php echo $form->error($model, 'body'); ?>
</div>

<div class="actions">
    <?php echo Html::submitButton('Send contact request') ?>
</div>
<?php $this->endWidget() ?>
