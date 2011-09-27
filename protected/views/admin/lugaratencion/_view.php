<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugarid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->lugarid), array('view', 'id'=>$data->lugarid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Dirección')); ?>:</b>
	<?php echo CHtml::encode($data->Dirección); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fono')); ?>:</b>
	<?php echo CHtml::encode($data->Fono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lat')); ?>:</b>
	<?php echo CHtml::encode($data->lat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lon')); ?>:</b>
	<?php echo CHtml::encode($data->lon); ?>
	<br />


</div>