<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Staff;

class AdminStaffController extends Controller
{
    protected $staff;
    public function __construct($route)
    {
        parent::__construct($route);
        $this->view->layout = 'admin';

        $this->staff = new Staff;
    }
    public function indexAction()
    {
        $staffs = $this->staff->all();
        $data = [
            'staffs' => $staffs,
        ];

        $this->view->render('admin/staff/index', 'Danh sách nhân viên', $data);
    }
    public function createAction()
    {
        $this->view->render('admin/staff/create', 'Thêm nhân viên');
    }
    public function storeAction()
    {
        $input = [
            "HoTenNV"   => $this->request->post("HoTenNV"),
            "DiaChi"        => $this->request->post("DiaChi"),
            "ChucVu"        => $this->request->post("ChucVu"),
            "SoDienThoai"   => $this->request->post("SoDienThoai"),
            "MatKhau"       => password_hash($this->request->post("MatKhau"), PASSWORD_DEFAULT),
        ];
        $this->staff->insert($input);
        $_SESSION['message'] = 'Đăng nhân viên thành công';
        $this->view->redirect('/admin/staffs');
    }
    public function editAction()
    {
        $staff = $this->staff->findOrFail($this->route['id']);
        $data = [
            'staff' => $staff,
        ];
        $this->view->render('admin/staff/edit', 'Sửa nhân viên', $data);
    }
    public function updateAction()
    {
        $input = [
            "HoTenNV"   => $this->request->post("HoTenNV"),
            "DiaChi"        => $this->request->post("DiaChi"),
            "ChucVu"        => $this->request->post("ChucVu"),
            "SoDienThoai"   => $this->request->post("SoDienThoai"),
        ];
        if ($this->request->post("MatKhau") != null) {
            $input["MatKhau"] = password_hash($this->request->post("MatKhau"), PASSWORD_DEFAULT);
        }

        $this->staff->update($input, $this->route['id']);
        $_SESSION['message'] = 'Sửa nhân viên thành công';
        $this->view->redirect('/admin/staffs');
    }

    public function destroyAction()
    {
        $this->staff->destroy($this->route['id']);
        $_SESSION['message'] = 'Xoá nhân viên thành công';
        $this->view->redirect('/admin/staffs');
    }
}
