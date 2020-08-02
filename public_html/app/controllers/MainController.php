<?php

namespace app\controllers;

use app\models\Main;
use app\models\User;
use fw\core\App;
use fw\core\base\View;
use fw\libs\Pagination;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

/**
 * Description of Main
 *
 */
class MainController extends AppController{

    public function __construct($route)
    {
        parent::__construct($route);

        $my_id = $uid = $_SESSION['user']['id'];
        $route = $this->route;
        $user = $cur_user = \R::load('user', $_SESSION['user']['id']);
        View::setMeta('', 'Описание страницы', 'Ключевые слова');
        $this->set(compact('title', 'user', 'my_id', 'uid', 'cur_user','route'));
    }

    public function indexAction(){
        // $this->view = 'profile';

        $my_id = $uid = $_SESSION['user']['id'];
        $route = $this->route;
        $user = $cur_user = \R::load('user', $_SESSION['user']['id']);
        View::setMeta('', 'Описание страницы', 'Ключевые слова');
        $this->set(compact('title', 'user', 'my_id', 'uid', 'cur_user','route'));
    }

    public function docsnextAction() {

    }

    public function profileAction() {}
    public function pageAction() {}
//    public function page2Action() {}
//    public function page3Action() {}
//    public function page4Action() {}
//    public function page5Action() {}

}
