<?php
/* @var $this EnviosExpedienteController */
/* @var $model EnviosExpediente */
/* @var $nro_entrada nro. de entrada del expediente asociado */

$this->breadcrumbs=array(
	'Envios de Expedientes'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar los  Envios', 'url'=>array('index')),
	array('label'=>'Administrar los Envios', 'url'=>array('admin')),
);
?>

<h1>Nuevo Envio para el Expediente Nro. <?php echo $nro_entrada; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>