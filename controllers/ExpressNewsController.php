<?php

namespace app\controllers;

use Yii;
use app\models\ExpressNews;
use app\models\ExpressNewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ExpressNewsController implements the CRUD actions for ExpressNews model.
 */
class ExpressNewsController extends Controller {

    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all ExpressNews models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new ExpressNewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ExpressNews model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ExpressNews model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new ExpressNews();

        if ($model->load(Yii::$app->request->post())) {
            $file_name = "";
            if (!empty($model->file = UploadedFile::getInstance($model, 'file'))) {
                $file_name = rand(0, 10000) . '.' . $model->file->extension;
                $model->file->saveAs('img/uploads/express_news/' . $file_name);
            }
            $model->link = $file_name;
            $model->user_id = Yii::$app->user->identity->id;
            //print_r($model);
            //return;
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('create', [
                            'model' => $model,
                ]);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ExpressNews model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if (!empty($model->file = UploadedFile::getInstance($model, 'file'))) {
                $model->file->saveAs('img/uploads/express_news/' . $model->file->baseName . '.' . $model->file->extension);
                $file_name = $model->file->baseName . '.' . $model->file->extension;
                if ($model->pic_name != null) {
                    unlink('img/uploads/express_news/' . $model->pic_name);
                }

                $model->pic_name = $file_name;
            }
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('update', [
                            'model' => $model,
                ]);
            }
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ExpressNews model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $model = $this->findModel($id);

        if ($model->pic_name != null) {
            unlink('img/uploads/express_news/' . $model->pic_name);
        }

        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ExpressNews model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ExpressNews the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = ExpressNews::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
