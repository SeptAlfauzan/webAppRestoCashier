<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminManager extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('admin/dashboard/index');
    }

    public function pegawai()
    {
        $this->load->view('admin/pegawai/index');
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
