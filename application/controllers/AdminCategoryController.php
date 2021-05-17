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
            "TenLoaiHang" => $this->request->post("TenLoaiHang")
        ];
        $this->category->insert($input);
        $_SESSION['message'] = 'Đăng loại hàng thành công';
        $this->view->redirect('/admin/categories');
    }
    public function editAction()
    {
        $category = $this->category->findOrFail($this->route['id']);
        $data = [
            'category' => $category,
        ];
        $this->view->render('admin/category/edit', 'Sửa danh mục', $data);
    }
    public function updateAction()
    {
        $input = [
            "TenLoaiHang" => $this->request->post("TenLoaiHang")
        ];

        $this->category->update($input, $this->route['id']);
        $_SESSION['message'] = 'Sửa loại hàng thành công';
        $this->view->redirect('/admin/categories');
    }

    public function destroyAction()
    {
        $this->category->destroy($this->route['id']);
        $_SESSION['message'] = 'Xoá loại hàng thành công';
        $this->view->redirect('/admin/categories');
    }
}
