<?php

namespace app\controllers;

use app\models\Cr;
use app\models\CrSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CrController implements the CRUD actions for Cr model.
 */
class CrController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Cr models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CrSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cr model.
     * @param string $crId Cr ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($crId)
    {
        return $this->render('view', [
            'model' => $this->findModel($crId),
        ]);
    }

    /**
     * Creates a new Cr model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Cr();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'crId' => $model->crId]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Cr model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $crId Cr ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($crId)
    {
        $model = $this->findModel($crId);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'crId' => $model->crId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Cr model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $crId Cr ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($crId)
    {
        $this->findModel($crId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Cr model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $crId Cr ID
     * @return Cr the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($crId)
    {
        if (($model = Cr::findOne(['crId' => $crId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
