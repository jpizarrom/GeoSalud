<?php
$this->breadcrumbs=array(
	'Convenios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Convenio', 'url'=>array('index')),
	array('label'=>'Create Convenio', 'url'=>array('create')),
	array('label'=>'View Convenio', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Convenio', 'url'=>array('admin')),
);
?>

<h1>Update Convenio <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>