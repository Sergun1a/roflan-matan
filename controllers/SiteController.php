<?php

namespace app\controllers;

use app\models\Theory;
use TheSeer\Tokenizer\Exception;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Html;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()

    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['theory', 'training'],
                'rules' => [
                    [
                        'actions' => ['theory', 'training'],
                        'allow' => true,
                        'roles' => ['@', '?'],
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
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionTheory()
    {
        $semester = Yii::$app->request->get('semestr');
        if ($semester == null) return $this->render('theorySemesterSelector');

        $questions = Theory::find()
            ->andWhere(['semestr' => $semester])
            ->all();

        $data = $this->formatForAccordeon($questions);
        return $this->render('theory', [
            'accordionData' => $data,
        ]);
    }

    protected function formatForAccordeon($questions)
    {
        $data = [
            'options' => ['tag' => 'div'],
            'itemOptions' => ['tag' => 'div'],
            'headerOptions' => ['tag' => 'h3'],
            'clientOptions' => ['collapsible' => true, 'active' => none],
        ];
        foreach ($questions as $question) {
            $data['items'][] = [
                'header' => $question->question,
                'content' => $question->answer,
                'options' => ['tag' => 'div'],
            ];
        }
        return $data;
    }


    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
