<?php
$this->breadcrumbs=array(
	'Horarioatencions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Horarioatencion', 'url'=>array('index')),
	array('label'=>'Manage Horarioatencion', 'url'=>array('admin')),
);
?>

<h1>Create Horarioatencion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>