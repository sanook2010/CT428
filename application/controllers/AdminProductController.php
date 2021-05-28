<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Product;
use application\models\Category;


class AdminProductController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        $this->view->layout = 'admin';
        $this->product = new Product;
        $this->category = new Category;
    }

    public function indexAction()
    {
        $products = $this->product->all();
        $data = [
            'products' => $products,
        ];
        $this->view->render('admin/product/index', 'Danh sách sản phẩm', $data);
    }
    public function createAction()
    {
        $categories = $this->category->all();
        $data = [
            'categories' => $categories,
        ];
        $this->view->render('admin/product/create', 'Thêm sản phẩm', $data);
    }

    public function storeAction()
    {
        $input = [
            "MSHH"      => $this->request->post("MSHH"),
            "TenHH"     => $this->request->post("TenHH"),
            "Gia"       => $this->request->post("Gia"),
            "SoLuongHang"      => $this->request->post("SoLuongHang"),
            "MaLoaiHang"      => $this->request->post("MaLoaiHang"),
            "QuyCach"      => $this->request->post("QuyCach"),
            "GhiChu"      => $this->request->post("GhiChu"),
        ];
        // var_dump($input);
        var_dump($this->product->insert($input));
        // $_SESSION['message'] = 'Đăng sản phẩm thành công';
        // $this->view->redirect('/admin/products');
    }
    public function editAction()
    {
        $categories = $this->category->all();
        $product = $this->product->findOrFail($this->route['id']);
        $data = [
            'product' => $product,
            'categories' => $categories,
        ];
        $this->view->render('admin/product/edit', 'Sửa sản phẩm', $data);
    }
    public function updateAction()
    {
        $input = [
           
            "TenHH"     => $this->request->post("TenHH"),
            "Gia"       => $this->request->post("Gia"),
            "SoLuongHang"      => $this->request->post("SoLuongHang"),
            "MaLoaiHang"      => $this->request->post("MaLoaiHang"),
            "QuyCach"      => $this->request->post("QuyCach"),
            "GhiChu"      => $this->request->post("GhiChu"),
        ];

        $this->product->update($input, $this->route['id']);
        $_SESSION['message'] = 'Sửa loại hàng thành công';
        $this->view->redirect('/admin/products/');
    }
}
