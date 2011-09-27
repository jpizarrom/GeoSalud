<?php
$this->breadcrumbs=array(
	'Lugaratencions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Lugaratencion', 'url'=>array('index')),
	array('label'=>'Manage Lugaratencion', 'url'=>array('admin')),
);
?>

<h1>Create Lugaratencion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>