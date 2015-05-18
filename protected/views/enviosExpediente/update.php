<?php
/* @var $this EnviosExpedienteController */
/* @var $model EnviosExpediente */

$this->breadcrumbs=array(
	'Envios Expedientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EnviosExpediente', 'url'=>array('index')),
	array('label'=>'Create EnviosExpediente', 'url'=>array('create')),
	array('label'=>'View EnviosExpediente', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EnviosExpediente', 'url'=>array('admin')),
);
?>

<h1>Update EnviosExpediente <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>