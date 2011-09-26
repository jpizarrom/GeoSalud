<?php
$this->breadcrumbs=array(
	'Profesionals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Profesional', 'url'=>array('index')),
	array('label'=>'Manage Profesional', 'url'=>array('admin')),
);
?>

<h1>Create Profesional</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>