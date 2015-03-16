<?php

class VocabularyController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
				
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'vocabulary'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$vocabulary = new Vocabulary;
		$description = new Description;
		$example = new Example;
		$actionvideo = new ActionVideo;
		$speakvideo = new SpeakVideo;
		
		
		
		$vocabulary->create_time = date("Y-m-d H:i");
		
		if (isset($_POST['Vocabulary'])) {
			
			$description->attributes=$_POST['Description'];
			$vocabulary->attributes=$_POST['Vocabulary'];
			$example->attributes=$_POST['Example'];
			$actionvideo->attributes=$_POST['ActionVideo'];
			$speakvideo->attributes=$_POST['SpeakVideo'];
			
			if ($vid_name = CUploadedFile::getInstance ( $actionvideo, 'vid_name' )) {
				// path for file upload
				$path = Yii::getPathOfAlias ( 'webroot' ) . '/action_video/';
				
				// use image name as username
				$filename = $vid_name;
				// uploaded image to path
				$vid_name->saveAs ( $path . $filename );
			} else
				// this for no image file upload
				$filename = 'noimage.jpg';
			// set another user attribute
			$actionvideo->vid_name = $filename;
			
			  if ($vid_name2 = CUploadedFile::getInstance ( $speakvideo, 'vid_name' )) {
				// path for file upload
				$path = Yii::getPathOfAlias ( 'webroot' ) . '/speak_video/';
			
				// use image name as username
				$filename = $vid_name2;
				// uploaded image to path
				$vid_name2->saveAs ( $path . $filename );
			} else
				// this for no image file upload
				$filename = 'noimage.jpg';
			// set another user attribute
			$speakvideo->vid_name = $filename;  
			
		if ($description->save() && $example->save() && $actionvideo->save()&& $speakvideo->save()){
			
   				$vocabulary->des_id = $description-> id;
   				$vocabulary->example_id = $example-> id;
   				$vocabulary->action_video_id = $actionvideo-> id;
   				$vocabulary->speak_video_id = $speakvideo-> id;
   				
   				$vocabulary->save();
   				$this->redirect(array('view','id'=>$vocabulary->id));
					}
				
			
		}
	
		$this->render('create',array(
				
				'description'=>$description,
				'vocabulary'=>$vocabulary,
				'example'=>$example,
				'actionvideo'=>$actionvideo,
				'speakvideo'=>$speakvideo,
				
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$vocabulary=$this->loadModel($id);
        $description = Description::model()->findByPk($id);
        $example = Example::model()->findByPk($id);
		$actionvideo = ActionVideo::model()->findByPk($id);
		$speakvideo = SpeakVideo::model()->findByPk($id);
		
		
		
		$vocabulary->update_time = date("Y-m-d H:i");
		
		if (isset($_POST['Vocabulary'])) {
				
			$description->attributes=$_POST['Description'];
			$vocabulary->attributes=$_POST['Vocabulary'];
			$example->attributes=$_POST['Example'];
			$actionvideo->attributes=$_POST['ActionVideo'];
			$speakvideo->attributes=$_POST['SpeakVideo'];
				
			if ($vid_name = CUploadedFile::getInstance ( $actionvideo, 'vid_name' )) {
				// path for file upload
				$path = Yii::getPathOfAlias ( 'webroot' ) . '/action_video/';
		
				// use image name as username
				$filename = $vid_name;
				// uploaded image to path
				$vid_name->saveAs ( $path . $filename );
			} else
				// this for no image file upload
				$filename = 'noimage.jpg';
			// set another user attribute
			$actionvideo->vid_name = $filename;
				
			if ($vid_name2 = CUploadedFile::getInstance ( $speakvideo, 'vid_name' )) {
				// path for file upload
				$path = Yii::getPathOfAlias ( 'webroot' ) . '/speak_video/';
					
				// use image name as username
				$filename = $vid_name2;
				// uploaded image to path
				$vid_name2->saveAs ( $path . $filename );
			} else
				// this for no image file upload
				$filename = 'noimage.jpg';
			// set another user attribute
			$speakvideo->vid_name = $filename;
				
			if ($description->save() && $example->save() && $actionvideo->save()&& $speakvideo->save()){
					
				$vocabulary->des_id = $description-> id;
				$vocabulary->example_id = $example-> id;
				$vocabulary->action_video_id = $actionvideo-> id;
				$vocabulary->speak_video_id = $speakvideo-> id;
					
				$vocabulary->save();
				$this->redirect(array('view','id'=>$vocabulary->id));
			}
		
				
		}
		
		$this->render('update',array(
		
				'description'=>$description,
				'vocabulary'=>$vocabulary,
				'example'=>$example,
				'actionvideo'=>$actionvideo,
				'speakvideo'=>$speakvideo,
		
		));
		/* if (isset($_POST['Vocabulary'])) {
			$model->attributes=$_POST['Vocabulary'];
			if ($model->save()) {
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		)); */
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if (Yii::app()->request->isPostRequest) {
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if (!isset($_GET['ajax'])) {
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
			}
		} else {
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
		}
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
        $model=new Vocabulary('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Vocabulary'])) {
            $model->attributes=$_GET['Vocabulary'];
        }

        $this->render('admin',array(
            'model'=>$model,
        ));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Vocabulary('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['Vocabulary'])) {
			$model->attributes=$_GET['Vocabulary'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Vocabulary the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Vocabulary::model()->findByPk($id);
		if ($model===null) {
			throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Vocabulary $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax']==='vocabulary-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}