<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
class SiteController extends Controller
{
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
                        'actions' => ['logout', 'index'],
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
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        //print_r(Yii::$app->user->identity);
        //echo Yii::$app->user->identity->fullname;
        //$model = CmsUsers::find()->all();
        //foreach ($model as $m){
        //    $time = time();
        //    //echo $m->name.' | '.$m->pass.'<br />';
        //    $user = new User;
        //    $user->username = $m->name;
        //    $user->auth_key = md5($time);
        //    $user->password_hash = $m->pass;
        //    $user->email = $m->email;
        //    $user->is_admin = $m->admin;
        //    $user->created_at = $time;
        //    $user->updated_at = $time;
        //    //$user->save(false);
        //}
        //echo 'Done!';
        
        //$model = SysUserCompany::find()->all();
        //$i = 0;
        //foreach ($model as $m){
        //    //$user = User::find()->where(['username'=>strtoupper($m->mycoid)])->one();
        //    $sql = 'SELECT * FROM user WHERE UPPER(username)=:username';
        //    $user = User::findBySql($sql, [':username' => strtoupper($m->mycoid)])->one();
        //    if ($user!==null){
        //        $m->user_id = $user->id;
        //        $m->save(false);
        //        $i++;
        //    }
        //}
        //echo 'Done! '.$i;
        
        return $this->render('index');
    }

    public function actionLogin()
    {   
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
