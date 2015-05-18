<?php
/* @var $this EnviosExpedienteController */
/* @var $model EnviosExpediente */

$this->breadcrumbs=array(
	'Envios Expedientes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EnviosExpediente', 'url'=>array('index')),
	array('label'=>'Create EnviosExpediente', 'url'=>array('create')),
	array('label'=>'Update EnviosExpediente', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EnviosExpediente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EnviosExpediente', 'url'=>array('admin')),
);
?>

<h1>View EnviosExpediente #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_expediente',
		'id_seccion',
		'fecha_entrada',
		'fecha_salida',
		'usuario_ult_act',
		'fecha_ult_act',
	),
)); ?>
