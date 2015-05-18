<?php
/* @var $this ExpedienteController */
/* @var $model Expediente */

$this->breadcrumbs=array(
	'Expedientes'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Expedientes', 'url'=>array('index')),
	array('label'=>'Nuevo Expediente', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#expediente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Expedientes</h1>
<h1><?php echo $errorMessage; ?></h1>
<?php /*echo CHtml::link('Advanced Search','#',array('class'=>'search-button'));*/ ?>
<div class="search-form" style="display:none">
<?php /*$this->renderPartial('_search',array(
	'model'=>$model,
)); */?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'expediente-grid',
	'ajaxUpdate'=>false,
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nro_entrada',
		'correlativo',
		'memorando',
		'oficio',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
