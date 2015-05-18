<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clave')); ?>:</b>
	<?php echo CHtml::encode($data->clave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_ult_act')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_ult_act); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ult_act')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ult_act); ?>
	<br />


</div>