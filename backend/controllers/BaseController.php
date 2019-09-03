<?php
namespace backend\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;

class BaseController extends Controller
{
    public $userLogin;
    public $activePeriode;
    public $employee;

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function init(){
        parent::init();

        if (!(\Yii::$app->user->isGuest)) {
            $this->userLogin = \Yii::$app->user->identity;
        }
    }
}
