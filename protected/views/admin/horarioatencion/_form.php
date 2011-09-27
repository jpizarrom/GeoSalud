<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'horarioatencion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'atencionid'); ?>
		<?php echo $form->textField($model,'atencionid'); ?>
		<?php echo $form->error($model,'atencionid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dia'); ?>
		<?php echo $form->textField($model,'dia'); ?>
		<?php echo $form->error($model,'dia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horainicio'); ?>
		<?php echo $form->textField($model,'horainicio'); ?>
		<?php echo $form->error($model,'horainicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horafin'); ?>
		<?php echo $form->textField($model,'horafin'); ?>
		<?php echo $form->error($model,'horafin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->