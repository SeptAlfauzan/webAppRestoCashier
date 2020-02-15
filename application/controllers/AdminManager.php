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
        // $this->session->unset_userdata('page');
    }

    public function user()
    {
        $this->session->userdata('user_page');
        $this->load->view('admin/user/index');
        // $this->session->unset_userdata('user_page');
    }

    public function menu()
    {
        $this->session->userdata('menu_page');
        $this->load->view('admin/menu/index');
        $this->session->unset_userdata('menu_page');
    }

    public function order()
    {
        $this->session->userdata('order_page');
        $this->load->view('admin/order/index');
        $this->session->unset_userdata('order_page');
    }

    public function logout()
    {
        $this->load->view('user/home/index');
    }
}
