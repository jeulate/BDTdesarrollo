<?php

namespace app\controllers;

use Yii;
use app\models\Conocimiento;
use app\models\ConocimientoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ConocimientoController implements the CRUD actions for Conocimiento model.
 */
class ConocimientoController extends Controller
{
    public function behaviors()
    {
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
     * Lists all Conocimiento models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ConocimientoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Conocimiento model.
     * @param integer $idPerfil
     * @param integer $idAreaConocimiento
     * @return mixed
     */
    public function actionView($idPerfil, $idAreaConocimiento)
    {
        return $this->render('view', [
            'model' => $this->findModel($idPerfil, $idAreaConocimiento),
        ]);
    }

    /**
     * Creates a new Conocimiento model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Conocimiento();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idPerfil' => $model->idPerfil, 'idAreaConocimiento' => $model->idAreaConocimiento]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Conocimiento model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idPerfil
     * @param integer $idAreaConocimiento
     * @return mixed
     */
    public function actionUpdate($idPerfil, $idAreaConocimiento)
    {
        $model = $this->findModel($idPerfil, $idAreaConocimiento);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idPerfil' => $model->idPerfil, 'idAreaConocimiento' => $model->idAreaConocimiento]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Conocimiento model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idPerfil
     * @param integer $idAreaConocimiento
     * @return mixed
     */
    public function actionDelete($idPerfil, $idAreaConocimiento)
    {
        $this->findModel($idPerfil, $idAreaConocimiento)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Conocimiento model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idPerfil
     * @param integer $idAreaConocimiento
     * @return Conocimiento the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idPerfil, $idAreaConocimiento)
    {
        if (($model = Conocimiento::findOne(['idPerfil' => $idPerfil, 'idAreaConocimiento' => $idAreaConocimiento])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
