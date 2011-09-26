<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'search-profesional-form-_form-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'profesional'); ?>
		<?php echo $form->textField($model,'profesional'); ?>
		<?php echo $form->error($model,'profesional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'especialidad'); ?>
		<?php echo $form->textField($model,'especialidad'); ?>
		<?php echo $form->error($model,'especialidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'convenio'); ?>
		<?php echo $form->textField($model,'convenio'); ?>
		<?php echo $form->error($model,'convenio'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->