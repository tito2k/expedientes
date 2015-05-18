<?php
/* @var $this SeccionController */
/* @var $model Seccion */

$this->breadcrumbs=array(
	'Secciones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar las Secciones', 'url'=>array('index')),
	array('label'=>'Nueva Sección', 'url'=>array('create')),
	array('label'=>'Ver una Sección', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar las Secciones', 'url'=>array('admin')),
);
?>

<h1>Modificar la Sección <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>