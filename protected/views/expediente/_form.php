<?php
/* @var $this ExpedienteController */
/* @var $model Expediente */
/* @var $form CActiveForm */

if ($model->isNewRecord) 
{
	$model->fecha_entrada = date('d-m-y');
}
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'expediente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'correlativo'); ?>
		<?php echo $form->textField($model,'correlativo'); ?>
		<?php echo $form->error($model,'correlativo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'memorando'); ?>
		<?php echo $form->textField($model,'memorando',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'memorando'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oficio'); ?>
		<?php echo $form->textField($model,'oficio',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'oficio'); ?>
	</div>

	<div class="row">
			<?php echo $form->labelEx($model,'fecha_entrada'); ?>
			<?php
 				if ($model->fecha_entrada!='') {
 					$model->fecha_entrada=date('d/m/Y',strtotime($model->fecha_entrada));
 				} else {
 					$model->fecha_entrada=date('d/m/Y',time());
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
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce',
				array(
					'model'=>$model,
					'attribute'=>'descripcion',
					'editorTemplate'=>'full',
					'htmlOptions'=>array('rows'=>3, 'cols'=>10, 'class'=>'tinymce'),
					'options' => array(
					'theme_advanced_buttons1' =>
					'undo,redo,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,advhr,|,sub,sup,|,bullist,numlist,|,formatselect,fontselect,fontsizeselect,',
					'theme_advanced_buttons2' => 'cut,copy,paste,pastetext,pasteword,|,tablecontrols,|,removeformat,visualaid,',
					'theme_advanced_buttons3' => '',
					'theme_advanced_buttons4' => '',
					'theme_advanced_toolbar_location' => 'top',
					'theme_advanced_toolbar_align' => 'left',
					'theme_advanced_statusbar_location' => 'none',
					'theme_advanced_font_sizes' => "10=10pt,11=11pt,12=12pt,13=13pt,14=14pt,
					15=15pt,16=16pt,17=17pt,18=18pt,19=19pt,20=20pt",
					)
		)); ?>		
<?php //echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Nuevo' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->