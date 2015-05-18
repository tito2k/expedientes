<?php
/* @var $this EnviosExpedienteController */
/* @var $model EnviosExpediente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_expediente'); ?>
		<?php echo $form->textField($model,'id_expediente'); ?>
	</div>

	<div class="row">
			<?php echo $form->labelEx($model,'id_seccion'); ?>
			<?php echo $form->dropDownList($model, 'id_seccion', CHtml::listData(Seccion::model()->findAll(), 'id', 'nombre'),
					array('prompt'=>'Elije una Sección')) ?>
			<?php echo $form->error($model,'id_seccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_entrada'); ?>
		<?php echo $form->textField($model,'fecha_entrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_salida'); ?>
		<?php echo $form->textField($model,'fecha_salida'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario_ult_act'); ?>
		<?php echo $form->textField($model,'usuario_ult_act',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_ult_act'); ?>
		<?php echo $form->textField($model,'fecha_ult_act',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->