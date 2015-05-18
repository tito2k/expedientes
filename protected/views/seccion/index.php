<?php
/* @var $this SeccionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Secciones',
);

$this->menu=array(
	array('label'=>'Nueva Sección', 'url'=>array('create')),
	array('label'=>'Administrar las Secciones', 'url'=>array('admin')),
);
?>

<h1>Secciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
