<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use common\components\AccessRule;
use common\models\User;
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
                'ruleConfig' => [
                    'class' => AccessRule::className(),
                ],
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => [
                            User::ROLE_SUPERUSER,
                        ],
                    ],
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
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
    
    public function actionAll()
    {
        // Function to get all controllers & actions
        $controllerlist = [];
        if ($handle = opendir('../backend/controllers')) {
            while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != ".." && substr($file, strrpos($file, '.') - 10) == 'Controller.php') {
                    $controllerlist[] = $file;
                }
            }
            closedir($handle);
        }
        asort($controllerlist);
        $fulllist = [];
        foreach ($controllerlist as $controller):
            $handle = fopen('../backend/controllers/' . $controller, "r");
            if ($handle) {
                while (($line = fgets($handle)) !== false) {
                    if (preg_match('/public function action(.*?)\(/', $line, $display)):
                        if (strlen($display[1]) > 2):
                            $fulllist[substr($controller, 0, -4)][] = strtolower($display[1]);
                        endif;
                    endif;
                }
            }
            fclose($handle);
        endforeach;
        echo '<pre>';
        print_r ($fulllist);
        echo '</pre>';
    }
}
