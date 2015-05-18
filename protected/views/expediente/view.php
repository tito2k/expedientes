<?php
/* @var $this ExpedienteController */
/* @var $model Expediente */

$this->breadcrumbs=array(
	'Expedientes'=>array('index'),
	$model->nro_entrada,
);

$this->menu=array(
	array('label'=>'Listar Expedientes', 'url'=>array('index')),
	array('label'=>'Nuevo Expediente', 'url'=>array('create')),
	array('label'=>'Modificar Expediente', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Expediente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Expedientes', 'url'=>array('admin')),
	array('label'=>false, 'itemOptions'=>array('class'=>'divider')),
	array('label'=>false, 'itemOptions'=>array('class'=>'divider')),
	array('label'=>'Envios', 'itemOptions'=>array('class'=>'portlet-decoration portlet-title')),
	array('label'=>'Nuevo Envio', 'url'=>array('enviosExpediente/create', 'eid'=>$model->id)),
);
?>

<h1>Ver Expediente Nro. <?php echo $model->nro_entrada; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nro_entrada',
		'correlativo',
		'memorando',
		'oficio',
		array('label'=>'Fecha de Entrada',
			'type'=>'raw',
			'value'=>Yii::app()->dateFormatter->format("dd/MM/yyyy",strtotime($model->fecha_entrada))
			),
		array(
			'label'=>'Descripción',
			'type'=>'raw',
			'value'=>strip_tags($model->descripcion)
			),
	),
)); ?>

<br>
<br>
<h2>Envios del Expediente</h2>

<?php $this->widget('zii.widgets.CListView', array(
'dataProvider'=>$enviosExpedienteDataProvider,
'itemView'=>'/enviosExpediente/_view',
)); ?>

