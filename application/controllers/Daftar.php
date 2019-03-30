<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

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
	function __construct(){
		parent::__construct();

		$this->load->model('m_user');

	}
	 public function index()
	{
		$this->load->view('daftar');
	}

	public function userBaru() 
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$nomortelp = $this->input->post('nomortelp');
		$alamat = $this->input->post('alamat');
		$katasandi = $this->input->post('katasandi');

		$data = array(
			'username' => $nama,
			'email' => $email, 
			'password' => $katasandi ,
			'telp' => $nomortelp,
			'alamat' => $alamat
			);

		$this->m_user->insertUser($data);
		redirect(base_url('Masuk'));
	}
}
