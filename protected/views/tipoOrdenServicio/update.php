<?php
/* @var $this TipoOrdenServicioController */
/* @var $model TipoOrdenServicio */

$this->breadcrumbs=array(
	'Tipo Orden Servicios'=>array('index'),
	$model->co_tipo_orden_servicio=>array('view','id'=>$model->co_tipo_orden_servicio),
	'Actalizar',
);

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->co_tipo_orden_servicio)),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tipo Orden Servicio <?php echo $model->co_tipo_orden_servicio; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>