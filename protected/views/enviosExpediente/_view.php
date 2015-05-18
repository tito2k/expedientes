<?php
/* @var $this EnviosExpedienteController */
/* @var $data EnviosExpediente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_seccion')); ?>:</b>
	<?php echo CHtml::encode($data->idSeccion->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_entrada')); ?>:</b>
	<?php if($data->fecha_entrada != 0)
			echo CHtml::encode(Yii::app()->dateFormatter->format("dd/MM/yyyy",strtotime($data->fecha_entrada))); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_salida')); ?>:</b>
	<?php if($data->fecha_salida != 0)
			echo CHtml::encode(Yii::app()->dateFormatter->format("dd/MM/yyyy",strtotime($data->fecha_salida))); ?>
	<br />

	<b><?php echo CHtml::link(CHtml::encode('Borrar envío'), array('enviosExpediente/delete', 'id'=>$data->id),
  				array(
    					'submit'=>array('enviosExpediente/delete', 'id'=>$data->id),
    					'params'=>array('returnUrl'=>Yii::app()->createUrl('expediente/view', array('id'=>$data->id_expediente))),
    					'class' => 'delete','confirm'=>'Está usted seguro de borrar este envío?'
  					)
			); ?>

	<br />

	<b><?php echo CHtml::link(CHtml::encode('Modificar envío'), array('enviosExpediente/update', 'id'=>$data->id),
				array(	
						'submit'=>array('enviosExpediente/update', 'id'=>$data->id),
						'params'=>array('returnUrl'=>Yii::app()->createUrl('expediente/view', array('id'=>$data->id_expediente)))
  					)
			); ?>

</div>