<div class="view">

	<b><?php echo CHtml::encode($data->lugar->getAttributeLabel('lugarid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->lugar->lugarid), array('lugar/view', 'id'=>$data->lugar->lugarid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->lugar->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->lugar->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('convenios')); ?>:</b>
	<?php 
	foreach($data->convenios as $convenio)
		echo $convenio->Nombre.', ';
	?>

</div>
