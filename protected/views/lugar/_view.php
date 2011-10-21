<div class="view full_list">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('lugarid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->lugarid), array('view', 'id'=>$data->lugarid)); ?>
	<br />-->

	<div class="item_list_title">
		<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
		<!--<?php echo CHtml::encode($data->Nombre); ?>-->
		<?php echo CHtml::link(CHtml::encode($data->Nombre), array('view', 'id'=>$data->lugarid)); ?>
		<br />
	</div>

</div>
