<?php
/* @var $this SeccionController */
/* @var $model Seccion */

$this->breadcrumbs=array(
	'Secciones'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar las Secciones', 'url'=>array('index')),
	array('label'=>'Nueva Sección', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#seccion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Secciones</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'seccion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nombre',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
