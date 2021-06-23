<?php


namespace app\controllers;

use app\core\Controller;
use app\core\View;

class GameController extends Controller
{
    public function gameAction()
    {
        $id = explode('/', $_SERVER['REQUEST_URI'])[2];
        if ($this->model->gameExists($id)) {
            $arg = $this->model->getData($id)[0];
            $this->view->render('Game1', $arg);
        }
        else
        {
            echo "404";
        }
    }
}