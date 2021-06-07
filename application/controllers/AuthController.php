<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Staff;

class AuthController extends Controller
{

	protected $staff;
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
			$this->staff = new Staff;

			$MatKhau = $this->request->post('MatKhau');
			$SoDienThoai = $this->request->post('SoDienThoai');
			
			$staff =  $this->staff->login($SoDienThoai, $MatKhau);
		
			if ($staff) {
				$_SESSION['admin'] = true;
				$_SESSION['admin']['id'] = $staff->MSNV;
				$this->view->redirect('/admin');
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
