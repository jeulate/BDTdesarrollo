<?php

namespace app\controllers;

use Yii;
use app\models\Formacion;
use app\models\FormacionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FormacionController implements the CRUD actions for Formacion model.
 */
class FormacionController extends Controller
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
     * Lists all Formacion models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FormacionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Formacion model.
     * @param integer $idPerfil
     * @param integer $idTipo
     * @return mixed
     */
    public function actionView($idPerfil, $idTipo)
    {
        return $this->render('view', [
            'model' => $this->findModel($idPerfil, $idTipo),
        ]);
    }

    /**
     * Creates a new Formacion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Formacion();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idPerfil' => $model->idPerfil, 'idTipo' => $model->idTipo]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Formacion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idPerfil
     * @param integer $idTipo
     * @return mixed
     */
    public function actionUpdate($idPerfil, $idTipo)
    {
        $model = $this->findModel($idPerfil, $idTipo);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idPerfil' => $model->idPerfil, 'idTipo' => $model->idTipo]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Formacion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idPerfil
     * @param integer $idTipo
     * @return mixed
     */
    public function actionDelete($idPerfil, $idTipo)
    {
        $this->findModel($idPerfil, $idTipo)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Formacion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idPerfil
     * @param integer $idTipo
     * @return Formacion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idPerfil, $idTipo)
    {
        if (($model = Formacion::findOne(['idPerfil' => $idPerfil, 'idTipo' => $idTipo])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
