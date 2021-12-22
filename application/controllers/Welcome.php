<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		date_default_timezone_set('Asia/Jakarta');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$url = "http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json";
		$get_url = file_get_contents($url);
		$data['provinsi'] = json_decode($get_url);

		// foreach ($data as $item) {
		// 	print_r($item->id . ' ' . $item->name);
		// }

		$this->load->view('input', $data);
	}

	public function hasil()
	{
		$data['nik'] = $this->input->post('nik');
		$data['nama'] = $this->input->post('nama');
		$data['jenis_kelamin'] = $this->input->post('kelamin');
		$data['kk'] = $this->input->post('kk');

		$this->load->view('hasil', $data);
	}
}
