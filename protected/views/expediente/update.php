<?php
/* @var $this ExpedienteController */
/* @var $model Expediente */

$this->breadcrumbs=array(
	'Expedientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Expedientes', 'url'=>array('index')),
	array('label'=>'Nuevo Expediente', 'url'=>array('create')),
	array('label'=>'Ver Expediente', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Expedientes', 'url'=>array('admin')),
);
?>

<h1>Modificar Expediente <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>