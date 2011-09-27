<?php
$this->breadcrumbs=array(
	'Caracteristicalugars'=>array('index'),
	$model->caracteristicaid=>array('view','id'=>$model->caracteristicaid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Caracteristicalugar', 'url'=>array('index')),
	array('label'=>'Create Caracteristicalugar', 'url'=>array('create')),
	array('label'=>'View Caracteristicalugar', 'url'=>array('view', 'id'=>$model->caracteristicaid)),
	array('label'=>'Manage Caracteristicalugar', 'url'=>array('admin')),
);
?>

<h1>Update Caracteristicalugar <?php echo $model->caracteristicaid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>