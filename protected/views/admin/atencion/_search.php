<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'atencionid'); ?>
		<?php echo $form->textField($model,'atencionid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lugarid'); ?>
		<?php echo $form->textField($model,'lugarid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profesionalid'); ?>
		<?php echo $form->textField($model,'profesionalid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'evaluacioncosteada'); ?>
		<?php echo $form->textField($model,'evaluacioncosteada'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->