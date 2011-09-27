<?php
$this->breadcrumbs=array(
	'Caracteristicalugars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Caracteristicalugar', 'url'=>array('index')),
	array('label'=>'Manage Caracteristicalugar', 'url'=>array('admin')),
);
?>

<h1>Create Caracteristicalugar</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>