<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('especialidadid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->especialidadid), array('view', 'id'=>$data->especialidadid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />


</div>