<?php

namespace application\controllers;

use application\core\Controller;

class AdminDashboardController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        $this->view->layout = 'admin';
    }
    public function indexAction()
    {
        $this->view->render('admin/dashboard/index', 'Dashboard');
    }
}
