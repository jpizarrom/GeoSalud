<?php
$this->breadcrumbs=array(
	'Facilidadpagos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Facilidadpago', 'url'=>array('index')),
	array('label'=>'Manage Facilidadpago', 'url'=>array('admin')),
);
?>

<h1>Create Facilidadpago</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>