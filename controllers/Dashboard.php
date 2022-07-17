<?php
defined('BASEPATH') or exit('NO DIRECT ACCESS SCRIPT ALLOWED');


class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Produk_model');
        $this->load->model('Penjualan_model');
        $this->load->model('User_model');
        $this->load->model('Detail_model');
    }

    public function index()
    {
        $data['judul'] = "Dashboard ASICS STORE";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->Produk_model->tproduk();
        $data['penjualan'] = $this->Penjualan_model->tpenjualan();
        $data['totalb'] = $this->Detail_model->charts();
        $data['us'] = $this->User_model->tuser();
        $this->load->view('layout/header', $data);
        $this->load->view('auth/dashboard', $data);
        $this->load->view('layout/footer',$data);
    }
}