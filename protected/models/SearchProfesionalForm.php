<?php
class SearchProfesionalForm extends CFormModel
{
    public $profesional;
    public $especialidad;
    public $convenio;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('profesional, especialidad, convenio', 'safe'),
			// email has to be a valid email address
			//array('profesional', 'required'),
			// verifyCode needs to be entered correctly
			//array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

}
