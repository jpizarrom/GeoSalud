<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('atencionid')); ?>:</b>
	<?php echo CHtml::encode($data->atencionid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia')); ?>:</b>
	<?php echo CHtml::encode($data->dia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horainicio')); ?>:</b>
	<?php echo CHtml::encode($data->horainicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horafin')); ?>:</b>
	<?php echo CHtml::encode($data->horafin); ?>
	<br />


</div>