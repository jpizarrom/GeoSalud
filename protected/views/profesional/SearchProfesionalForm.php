<?php
return array(
	'title'=>'Please provide your login credential',

	'elements'=>array(
		'profesional'=>array(
			'type'=>'text',
			'maxlength'=>32,
		),
		'especialidad'=>array(
			'type'=>'dropdownlist',
			'items'=>Especialidad::model()->getEspecialidadesOptions(),
			'prompt'=>'Please select:',
		),
		'convenio'=>array(
			'type'=>'text',
			'maxlength'=>32,
		)
	),

	'buttons'=>array(
		'login'=>array(
		'type'=>'submit',
		'label'=>'Find',
		),
	),
);
