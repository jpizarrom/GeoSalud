<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'atencion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'lugarid'); ?>
		<?php echo $form->dropDownList($model,'lugarid', Lugaratencion::model()->getOptions()); ?>
		<?php echo $form->error($model,'lugarid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profesionalid'); ?>
		<?php echo $form->dropDownList($model,'profesionalid', Profesional::model()->getOptions()); ?>
		<?php echo $form->error($model,'profesionalid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'evaluacioncosteada'); ?>
		<?php echo $form->textField($model,'evaluacioncosteada'); ?>
		<?php echo $form->error($model,'evaluacioncosteada'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
