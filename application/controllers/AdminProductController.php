<?php

namespace application\controllers;

use application\core\Controller;

class AdminProductController extends Controller
{

    public function indexAction()
    {
        $this->view->render(null, 'Вход');
    }
}
