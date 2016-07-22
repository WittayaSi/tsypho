<?php

namespace app\controllers;

use Yii;
use app\models\Information;
use app\models\InformationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * InformationController implements the CRUD actions for Information model.
 */
class InformationController extends Controller {

    public function behaviors() {
        return [
            'access' =>[
                'class' => AccessControl::className(),
                'only' => ['index','create','update','delete','view'],
                'rules' => [
                    [
                        'allow' => false,
                        'roles' => ['?']
                    ],
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Information models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new InformationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->setSort(['defaultOrder' => ['id' =>SORT_DESC]]);
        
        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Information model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Information model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        
        $model = new Information();

        if ($model->load(Yii::$app->request->post())) {
            $file_name = "";
            if (!empty($model->file = UploadedFile::getInstance($model, 'file'))) {
                $file_name = $model->file->baseName . '_' . rand(0, 10000) . '.' . $model->file->extension;
                $model->file->saveAs('img/uploads/' . $file_name);
            }
            $model->pic_name = $file_name;
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
     * Updates an existing Information model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            if (!empty($model->file = UploadedFile::getInstance($model, 'file'))) {
                $file_name = $model->file->baseName . '_' . rand(0, 100) . '.' . $model->file->extension;
                $model->file->saveAs('img/uploads/' . $file_name);
                if ($model->pic_name != null) {
                    unlink('img/uploads/' . $model->pic_name);
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
     * Deletes an existing Information model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $model = $this->findModel($id);

        if ($model->pic_name != null) {
            unlink('img/uploads/' . $model->pic_name);
        }

        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Information model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Information the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Information::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
