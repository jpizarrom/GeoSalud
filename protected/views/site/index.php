<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <tt><?php echo __FILE__; ?></tt></li>
	<li>Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>

<?php echo CHtml::link(CHtml::encode('Profesional'), array('Profesional/index')); ?> </br>
</br>

<?php echo CHtml::link(CHtml::encode('Profesional'), array('admin/Profesional')); ?> </br>
<?php echo CHtml::link(CHtml::encode('Especialidad'), array('admin/Especialidad')); ?> </br>
<?php echo CHtml::link(CHtml::encode('Convenio'), array('admin/Convenio')); ?> </br>
<?php echo CHtml::link(CHtml::encode('Atencion'), array('admin/Atencion')); ?> </br>
<?php echo CHtml::link(CHtml::encode('Facilidadpago'), array('admin/Facilidadpago')); ?> </br>
<?php echo CHtml::link(CHtml::encode('Lugaratencion'), array('admin/Lugaratencion')); ?> </br>
<?php echo CHtml::link(CHtml::encode('Horarioatencion'), array('admin/Horarioatencion')); ?> </br>
<?php echo CHtml::link(CHtml::encode('Caracteristicalugar'), array('admin/Caracteristicalugar')); ?> </br>

