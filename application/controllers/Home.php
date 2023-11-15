<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{

		$this->load->model('m_produk');
        $data['produk'] = $this->m_produk->getAllProduk();
        $this->load->model('m_jenis');
        $data['jenis'] = $this->m_jenis->getAllJenis();
        $this->load->model('m_produsen');
        $data['produsen'] = $this->m_produsen->getAllProdusen();
        $this->load->view('home', $data);
	}

	public function product_detail()
	{
		$this->load->model('m_produk');
        $data['produk'] = $this->m_produk->getAllProduk();
        $this->load->model('m_jenis');
        $data['jenis'] = $this->m_jenis->getAllJenis();
        $this->load->model('m_produsen');
        $data['produsen'] = $this->m_produsen->getAllProdusen();
        $this->load->view('product_detail', $data);
	}
}
