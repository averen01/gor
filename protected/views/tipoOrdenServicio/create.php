<?php
/* @var $this TipoOrdenServicioController */
/* @var $model TipoOrdenServicio */

$this->breadcrumbs=array(
	'Tipo Orden Servicios'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Crear Tipo Orden Servicio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>