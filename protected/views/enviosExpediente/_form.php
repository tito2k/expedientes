<?php
/* @var $this EnviosExpedienteController */
/* @var $model EnviosExpediente */
/* @var $form CActiveForm */

if ($model->isNewRecord) 
{
	$model->fecha_entrada = date('d-m-y');
}

?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'envios-expediente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
			<?php echo $form->labelEx($model,'id_seccion'); ?>
			<?php echo $form->dropDownList($model, 'id_seccion', CHtml::listData(Seccion::model()->findAll(), 'id', 'nombre'),
					array('prompt'=>'Elije una Sección')) ?>
			<?php echo $form->error($model,'id_seccion'); ?>
	</div>

	<div class="row">
			<?php echo $form->labelEx($model,'fecha_entrada'); ?>
			<?php
 				if ($model->fecha_entrada!='') {
 					$model->fecha_entrada=date('d/m/Y',strtotime($model->fecha_entrada));
 				} else {
 					$model->fecha_entrada = '';
 				}
 				$this->widget('zii.widgets.jui.CJuiDatePicker', array(
 					'model'=>$model,
 					'attribute'=>'fecha_entrada',
 					'value'=>$model->fecha_entrada,
 					'language' => 'es',
 					'htmlOptions' => array('readonly'=>"readonly"), 
 					'options'=>array(
 						'autoSize'=>true,
 						'defaultDate'=>$model->fecha_entrada,
 						'dateFormat'=>'dd/mm/yy',
 						'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
 						'buttonImageOnly'=>true,
 						'buttonText'=>'Fecha',
 						'selectOtherMonths'=>true,
 						'showAnim'=>'slide',
 						'showButtonPanel'=>true,
 						'showOn'=>'button',
 						'showOtherMonths'=>true,
 						'changeMonth' => 'true',
 						'changeYear' => 'true',
 					),
 				)); 
 			?>
			<?php echo $form->error($model,'fecha_entrada'); ?>
	</div>

	<div class="row">
			<?php echo $form->labelEx($model,'fecha_salida'); ?>
			<?php
 				if ($model->fecha_salida!=0) {
 					$model->fecha_salida=date('d/m/Y',strtotime($model->fecha_salida));
 				} else {
 					$model->fecha_salida = '';
 				}
 				$this->widget('zii.widgets.jui.CJuiDatePicker', array(
 					'model'=>$model,
 					'attribute'=>'fecha_salida',
 					'value'=>$model->fecha_salida,
 					'language' => 'es',
 					'htmlOptions' => array('readonly'=>"readonly"), 
 					'options'=>array(
 						'autoSize'=>true,
 						'defaultDate'=>$model->fecha_salida,
 						'dateFormat'=>'dd/mm/yy',
 						'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
 						'buttonImageOnly'=>true,
 						'buttonText'=>'Fecha',
 						'selectOtherMonths'=>true,
 						'showAnim'=>'slide',
 						'showButtonPanel'=>true,
 						'showOn'=>'button',
 						'showOtherMonths'=>true,
 						'changeMonth' => 'true',
 						'changeYear' => 'true',
 					),
 				)); 
 			?>
			<?php echo $form->error($model,'fecha_salida'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Nuevo' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->