<?php
$this->breadcrumbs=array(
	'Profesional Especialidad'=>array('index'),
	'Admin',
);
$this->menu=array(
	array('label'=>'Create Atencion', 'url'=>array('create')),
	array('label'=>'Manage Atencion', 'url'=>array('admin')),
);
?>

<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>
