<?php
/* @var $this ExpedienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Expedientes',
);

$this->menu=array(
	array('label'=>'Nuevo Expediente', 'url'=>array('create')),
	array('label'=>'Administrar Expedientes', 'url'=>array('admin')),
);
?>

<h1>Expedientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
