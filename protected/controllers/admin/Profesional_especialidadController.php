<?php

class Profesional_especialidadController extends Controller
{
	public $layout='//layouts/column2';
	
	public function actionAdmin()
	{
		$model=new ProfesionalEspecialidad('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ProfesionalEspecialidad']))
			$model->attributes=$_GET['ProfesionalEspecialidad'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionCreate()
	{
		$model=new ProfesionalEspecialidad;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ProfesionalEspecialidad']))
		{
			$model->attributes=$_POST['ProfesionalEspecialidad'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionUpdate()
	{
		$this->render('update');
	}

	public function actionView()
	{
		$this->render('view');
	}

	public function actionDelete($id, $especialidadid)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id, $especialidadid)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
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
	public function loadModel($id, $especialidadid)
	{
		$model=ProfesionalEspecialidad::model()->findByPk( array('id'=>$id, 'especialidadid'=>$especialidadid) );

		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}
