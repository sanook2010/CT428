<?php

namespace application\controllers;

use application\core\Controller;
use application\models\User;

class AuthController extends Controller
{

	protected $user;
	public function __construct($route)
	{
		parent::__construct($route);
		$this->view->layout = 'auth';
	}
	//Index Login
	public function loginIndexAction()
	{
		if (isset($_SESSION['admin'])) {
			$this->view->redirect('/admin');
		}
		$this->view->render('auth/login', 'Đăng nhập');
	}
	//
	public function loginAction()
	{
		if (!empty($_POST)) {
			$this->user = new User;

			$MatKhau = $this->request->post('MatKhau');
			$SoDienThoai = $this->request->post('SoDienThoai');

			$user =  $this->user->login($SoDienThoai, $MatKhau);
			if ($user) {
				$_SESSION['admin'] = true;
				$this->view->redirect('/');
			}
			$this->view->redirect('/admin/login');
		}
		$this->view->errorCode(403);
	}





	public function registerIndexAction()
	{
		$this->view->render(null, 'Đăng kí');
	}
}
