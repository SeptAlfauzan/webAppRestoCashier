<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminManager extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_m');
    }
    public function index()
    {
        $this->load->view('admin/dashboard/index');
    }

    public function pegawai()
    {
        $data['user'] = $this->Admin_m->getData('level');
        $this->load->view('admin/pegawai/index', $data);
    }

    public function menu()
    {
        $this->load->view('admin/menu/index');
    }

    public function order()
    {
        $this->load->view('admin/order/index');
    }

    public function logout()
    {
        $this->load->view('user/home/index');
    }
}
