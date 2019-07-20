<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntryForm;
use app\models\Market;

class SiteController extends Controller
{
    /*public function actionSay($message = 'Привет')
    {
        return $this->render('say', ['message' => $message]);
    }*/
    //привет`
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Домашняя страница
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Страница товаров
     *
     * @return string
     */
    public function actionMarket()
    {
        $materials = Market::find()->orderBy(['created_at' => SORT_DESC]);
        $pages = new Pagination(['totalCount' => $materials->count(), 'pageSize' => 6]);
        $materials = $materials->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('market', compact('materials', 'pages'));
    }

    public function actionMaterial($id)
    {
        $material = Market::find()->where(['id' => $id])->one();
        return $this->render('material', compact('id', 'material'));
    }

    /**
     * Заказать звонок
     *
     * @return string
     */
    public function actionOrder()
    {
        if (Yii::$app->request->isPost) {
            $name = Yii::$app->request->post('name');
            $phone = Yii::$app->request->post('phone');
            Yii::$app->mailer->compose()
                ->setFrom('apchelov@megadacha21.ru')
                ->setTo('lexa.exa2010@yandex.ru')
                ->setSubject('Новый заказ') // тема письма
                ->setHtmlBody('Имя заказчика: ' . $name . '<br>' . 'Номер телефона: ' . $phone)
                ->send();
        }

        return $this->redirect('index');
    }
}
