<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Category;

class AdminCategoryController extends Controller
{
    protected $category;
    public function __construct($route)
    {
        parent::__construct($route);
        $this->view->layout = 'admin';

        $this->category = new Category;
    }
    public function indexAction()
    {
        $categories = $this->category->all();
        $data = [
            'categories' => $categories,
        ];

        $this->view->render('admin/category/index', 'Danh mục sản phẩm', $data);
    }
    public function createAction()
    {
        $this->view->render('admin/category/create', 'Thêm danh mục');
    }
    public function storeAction()
    {
        $input = [
            "MaLoaiHang" => $this->request->post("MaLoaiHang"),
            "TenLoaiHang" => $this->request->post("TenLoaiHang")
        ];
        $this->category->insert($input);
        $_SESSION['message'] = 'Đăng loại hàng thành công';
        $this->view->redirect('/admin/categories');
    }
}
