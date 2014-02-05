<?php
/* @var $this TipoOrdenServicioController */
/* @var $model TipoOrdenServicio */

$this->breadcrumbs=array(
	'Tipo Orden Servicios'=>array('index'),
	$model->co_tipo_orden_servicio,
);

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->co_tipo_orden_servicio)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->co_tipo_orden_servicio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Tipo Orden Servicio #<?php echo $model->co_tipo_orden_servicio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_tipo_orden_servicio',
		//'co_tipo_orden_servicio',
		'nb_tipo_servicio',
		'tx_desc',
		'fe_crea',
		'fe_modf',
		'usr_crea',
		'usr_modf',
		'in_stat',
	),
)); ?>
