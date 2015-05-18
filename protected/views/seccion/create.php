<?php
/* @var $this SeccionController */
/* @var $model Seccion */

$this->breadcrumbs=array(
	'Secciones'=>array('index'),
	'Nueva',
);

$this->menu=array(
	array('label'=>'Listar las Secciones', 'url'=>array('index')),
	array('label'=>'Administrar las Secciones', 'url'=>array('admin')),
);
?>

<h1>Nueva Sección</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>