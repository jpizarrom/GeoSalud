<?php

class ProfesionalController extends Controller
{
	public function actionIndex()
	{
		$model=new SearchProfesionalForm;
		if(isset($_POST['SearchProfesionalForm']))
		    {
			// collects user input data
			$model->attributes=$_POST['SearchProfesionalForm'];
			// validates user input and redirect to previous page if validated
			if($model->validate())
			    $this->redirect(Yii::app()->user->returnUrl);
		    }

		$this->render('index',array('model'=>$model));
	}

	public function actionIndex2()
	{
		$model=new SearchProfesionalForm;
		$form = new CForm('application.views.profesional.SearchProfesionalForm', $model);
		
		if(isset($_POST['SearchProfesionalForm']))
		    {
			// collects user input data
			$model->attributes=$_POST['SearchProfesionalForm'];
			// validates user input and redirect to previous page if validated
			if($model->validate())
			    $this->redirect(Yii::app()->user->returnUrl);
		    }

		$this->render('_form2',array('model'=>$model, 'form'=>$form));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
