<?php
/* @var $this ExpedienteController */
/* @var $model Expediente */

$this->breadcrumbs=array(
	'Expedientes'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Expedientes', 'url'=>array('index')),
	array('label'=>'Administrar Expedientes', 'url'=>array('admin')),
);
?>

<h1>Nuevo Expediente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>