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
        $data['menus'] = $this->Admin_m->getData('masakan');
        $this->load->view('admin/menu/index', $data);
        // $this->session->unset_userdata('menu_page');
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

    // action controller
    public function upload_image($path, $image_name, $view_url)
    {
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'jpg|png|gif';
        $config['maxsize'] = 4000;
        $config['overwrite'] = true;
        $config['file_name'] = $image_name;

        
        $this->load->library('upload', $config);
        
        if(! $this->upload->do_upload('image')){
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
        }else{
            $data = array('image_metadata' => $this->upload->data());  
            
            $namaFile = $data["image_metadata"]['file_name'];
            return $namaFile;
        }
    }

    public function randomChar($strName)
    {
        $strNameUp = strtoupper($strName);
        
        $str = "0123456789" . $strNameUp;
        $rand = "";

        for ($i=0; $i < 10; $i++) { 
            $rand .= $str[rand(0, strlen($str)) - 1];
        }

        return $rand;
    }

    public function upload_menu()
    {
        $namaMasakan = $_POST['nama_masakan'];
        $harga = $_POST['harga_masakan'];
        $statusMasakan = $_POST['status_masakan'];
        $idKategori = $_POST['id_kategori_masakan'];
        $idMasakan = $this->randomChar($namaMasakan);
        
        $foto = $this->upload_image('./images/', $idMasakan, 'admin/menu/index');

        if ($statusMasakan == 1) {
            $statusMasakan = true;
        }else{
            $statusMasakan = false;
        }
        $data = array(
            'id_masakan' => $idMasakan,
            'nama_masakan' => $namaMasakan,
            'harga' => $harga,
            'status_masakan' => $statusMasakan,
            'foto_masakan' =>$foto,
            'id_kategori' => $idKategori
        );
        $table = 'masakan';
        $this->Admin_m->insert($table, $data);
        redirect('AdminManager/menu');
    }

    public function delete_menu()
    {
        $id = $_GET['id_masakan'];
        $this->Admin_m->delete('masakan', 'id_masakan', $id);
        redirect('AdminManager/menu');
    }

    public function edit_menu()
    {
        $id = $_GET['id_masakan'];
        $data['menus'] = $this->Admin_m->getSpecifiedData('masakan', 'id_masakan', $id);
        $this->load->view('admin/edit_menu/index', $data);
    }

    public function do_edit_menu()
    {
        $id = $_GET['id'];

        $namaMasakan = $_POST['nama_masakan'];
        $harga = $_POST['harga_masakan'];
        $statusMasakan = $_POST['status_masakan'];
        $idKategori = $_POST['id_kategori_masakan'];

        $img = $_FILES['image']['name'];
        if(! $img == ''){
            $this->delete_image('masakan', 'id_masakan', $id);
            $foto = $this->upload_image('./images/', $id, 'admin/menu/index');
            $data['foto_masakan'] = $foto;
        }

        if ($statusMasakan == 1) {
            $statusMasakan = true;
        }else{
            $statusMasakan = false;
        }

        $data = array(
            'nama_masakan' => $namaMasakan,
            'harga' => $harga,
            'status_masakan' => $statusMasakan,
            'id_kategori' => $idKategori
        );

        $this->Admin_m->update('masakan', 'id_masakan', $id, $data);
        redirect('AdminManager/menu');
    }

    public function delete_image($table, $id_column, $id)
    {
        $image = $this->Admin_m->getSpecifiedData($table, $id_column, $id);

        $imageName = $image[0]['foto_masakan'];
        $fileName = explode(".", $imageName)[0];
        return array_map('unlink', glob(FCPATH.'images/'.$fileName.'*'));
    }
}
