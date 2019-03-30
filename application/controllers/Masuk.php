<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

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
		$this->load->model('m_masukAkun');
		$this->load->model('m_masukPenampungan');
	}

	public function index()
	{
		$this->load->view('masuk');
	}

	public function login() 
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		// var_dump($password);
		// die();
		// $where = array(
		// 	'email' => $email, 
		// 	'password' => $katasandi 
		// 	);
		$cek1 = $this->m_masukAkun->masukAkun($email, $password)->num_rows();
		$cek2 = $this->m_masukPenampungan->masukPenampungan($email, $password)->num_rows();
		
		if($cek1 > 0){
			$data_session = array(
				'email' => $email,
				'status' => "login"
			);
			$this->session->set_userdata($data_session);
		redirect(base_url('HalamanAwalPengguna'));
		} else if($cek2 > 0){
			$data_session = array(
				'email' => $email,
				'status' => "login"
			);
			$this->session->set_userdata($data_session);
		redirect(base_url('ProfilPenampunganHewan'));
		}else{
			$this->session->set_flashdata('error', "<center><strong>Gagal Login!</strong> Username / Password yang anda masukkan salah.</center>");
			redirect(base_url('Masuk'));
		}
		
	}
	
	
}
