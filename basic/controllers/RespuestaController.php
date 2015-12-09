<?php

namespace app\controllers;

use Yii;
use app\models\Respuesta;
use app\models\RespuestaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RespuestaController implements the CRUD actions for Respuesta model.
 */
class RespuestaController extends Controller
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
     * Lists all Respuesta models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RespuestaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Respuesta model.
     * @param string $id
     * @param integer $idPregunta
     * @param string $codFormulario
     * @return mixed
     */
    public function actionView($id, $idPregunta, $codFormulario)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $idPregunta, $codFormulario),
        ]);
    }

    /**
     * Creates a new Respuesta model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Respuesta();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'idPregunta' => $model->idPregunta, 'codFormulario' => $model->codFormulario]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Respuesta model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @param integer $idPregunta
     * @param string $codFormulario
     * @return mixed
     */
    public function actionUpdate($id, $idPregunta, $codFormulario)
    {
        $model = $this->findModel($id, $idPregunta, $codFormulario);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'idPregunta' => $model->idPregunta, 'codFormulario' => $model->codFormulario]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Respuesta model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @param integer $idPregunta
     * @param string $codFormulario
     * @return mixed
     */
    public function actionDelete($id, $idPregunta, $codFormulario)
    {
        $this->findModel($id, $idPregunta, $codFormulario)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Respuesta model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @param integer $idPregunta
     * @param string $codFormulario
     * @return Respuesta the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $idPregunta, $codFormulario)
    {
        if (($model = Respuesta::findOne(['id' => $id, 'idPregunta' => $idPregunta, 'codFormulario' => $codFormulario])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
