<?php
$this->breadcrumbs=array(
	'Convenios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Convenio', 'url'=>array('index')),
	array('label'=>'Manage Convenio', 'url'=>array('admin')),
);
?>

<h1>Create Convenio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>