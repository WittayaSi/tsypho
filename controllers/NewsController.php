<?php

namespace app\controllers;

use Yii;
use app\models\News;
use app\models\NewsPics;
use app\models\NewsFiles;
use app\models\NewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {

        $model = new News();
        $model_pic = new NewsPics();
        //$model_file = new NewsFiles();
        $picName = "";
        //$fileName = "";

        if ($model->load(Yii::$app->request->post())) {

            $model->user_id = Yii::$app->user->identity->id;
            //print_r($model);
            //exit();
            if ($model->save()) {

                $model_pic->pics = UploadedFile::getInstances($model_pic, 'pics');
                $myPath = "img/news/".$model->id;
                mkdir($myPath,0777);
                if ($model_pic->pics) {
                    foreach ($model_pic->pics as $pic) {
                        $picName = $model->id . '_' . rand(0, 100000) . '.' . $pic->extension;
                        
                        
                        $pic->saveAs($myPath . '/' . $picName);

                        $model2 = new NewsPics();

                        $model2->news_id = $model->id;
                        $model2->pic_name = $picName;
                        $model2->save();
                    }
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            } else {
                return $this->render('create', [
                            'model' => $model,
                            'model_pic' => $model_pic,
                                //'model_files' => $model_files
                ]);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'model_pic' => $model_pic,
                            //'model_files' => $model_files
            ]);
        }
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
