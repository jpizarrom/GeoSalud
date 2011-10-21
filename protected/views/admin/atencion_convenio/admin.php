<?php
$this->breadcrumbs=array(
	'Atencion Convenio'=>array('/admin/atencion_convenio'),
	'Admin',
);?>
<?php
$this->menu=array(
	array('label'=>'List Atencion Convenio', 'url'=>array('index')),
	array('label'=>'Create Atencion Convenio', 'url'=>array('create')),
);
?>

<h1>Manage Profesional Especialidad</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'atencion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'atencionid',
		/*array(
			'class'=>'CButtonColumn',
		),*/
		array(
			'class'=>'CButtonColumn',
            'viewButtonUrl'=>'Yii::app()->createUrl("/admin/atencion_convenio/view", array("id" =>  $data["id"], "atencionid" =>  $data["atencionid"] ))',
			'deleteButtonUrl'=>'Yii::app()->createUrl("/admin/atencion_convenio/delete", array("id" =>  $data["id"], "atencionid" =>  $data["atencionid"] ))',
			//'updateButtonUrl'=>'Yii::app()->createUrl("/controllername/update", array("id" =>  $data["id"]))',
		),
	),
)); ?>
