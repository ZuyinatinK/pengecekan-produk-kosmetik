<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->model('m_chart');
        $data['jmlhprodusen'] = $this->m_chart->getJumlahProdusen();
        $data['jmlhproduk'] = $this->m_chart->getJumlahProduk();
        $this->load->view('dashboard' , $data);
    }
}