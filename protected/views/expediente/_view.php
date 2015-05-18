<?php
/* @var $this ExpedienteController */
/* @var $data Expediente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_entrada')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nro_entrada), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correlativo')); ?>:</b>
	<?php echo CHtml::encode($data->correlativo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('memorando')); ?>:</b>
	<?php echo CHtml::encode($data->memorando); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oficio')); ?>:</b>
	<?php echo CHtml::encode($data->oficio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_entrada')); ?>:</b>
	<?php if($data->fecha_entrada != 0)
			echo CHtml::encode(Yii::app()->dateFormatter->format("dd/MM/yy",strtotime($data->fecha_entrada))); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode(strip_tags($data->descripcion)); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ult_act')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ult_act); ?>
	<br />

	*/ ?>

</div>