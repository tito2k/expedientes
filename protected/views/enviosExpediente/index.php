<?php
/* @var $this EnviosExpedienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Envios del Expediente',
);

$this->menu=array(
	array('label'=>'Nuevo Envio', 'url'=>array('create')),
	array('label'=>'Administrar Envios', 'url'=>array('admin')),
);
?>

<h1>Envios del Expediente</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
