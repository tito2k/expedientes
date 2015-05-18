<?php
/* @var $this SeccionController */
/* @var $model Seccion */

$this->breadcrumbs=array(
	'Secciones'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar las Secciones', 'url'=>array('index')),
	array('label'=>'Nueva Sección', 'url'=>array('create')),
	array('label'=>'Modificar Sección', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Sección', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Está seguro de borrar esta Sección?')),
	array('label'=>'Administrar las Secciones', 'url'=>array('admin')),
);
?>

<h1>Ver la Sección <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre',
	),
)); ?>
