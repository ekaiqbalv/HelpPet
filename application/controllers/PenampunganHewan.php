<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenampunganHewan extends CI_Controller {

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
		$this->load->model('m_penampungan');
	}
	public function index()
	{
		$where = array('email' => $this->session->userdata('email'));
		$data['user'] = $this->m_user->tampil_user($where)->result();
		$data['penampungan'] = $this->m_penampungan->tampil_penampungan()->result();
		$this->load->view('penampungan_hewan', $data);

	}
}
