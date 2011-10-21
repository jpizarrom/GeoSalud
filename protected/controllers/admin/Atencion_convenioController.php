<?php

class Atencion_convenioController extends Controller
{
	public $layout='//layouts/column2';
    
	public function actionAdmin()
	{
		$model=new AtencionConvenio('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['AtencionConvenio']))
			$model->attributes=$_GET['AtencionConvenio'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionCreate()
	{
		$model=new AtencionConvenio;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['AtencionConvenio']))
		{
			$model->attributes=$_POST['AtencionConvenio'];
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

	public function actionView($id, $atencionid)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id, $atencionid),
		));
	}

	public function actionDelete($id, $atencionid)
	{
		//if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id, $atencionid)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		//else
		//	throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
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
	public function loadModel($id, $atencionid)
	{
		$model=AtencionConvenio::model()->findByPk( array('id'=>$id, 'atencionid'=>$atencionid) );

		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}
