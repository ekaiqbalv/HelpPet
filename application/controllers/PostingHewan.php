<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PostingHewan extends CI_Controller {

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
		$this->load->model('m_postingHewan');
	}
	public function index()
	{
		$where = array('email' => $this->session->userdata('email'));
		$data['user'] = $this->m_user->tampil_user($where)->result();
		$this->load->view('postinghewan', $data);
	}

	public function postingHewan()
	{
		$where = array('email' => $this->session->userdata('email'));
		$data['user'] = $this->m_user->tampil_user($where)->result();
		

		$deskripsi = $this->input->post('deskripsi');
		$namahewan = $this->input->post('namahewan');
		$jenishewan = $this->input->post('jenishewan');
		$rashewan = $this->input->post('rashewan');
		$jeniskelaminhewan = $this->input->post('jeniskelaminhewan');
		$umurhewan = $this->input->post('umurhewan');
		$warnahewan = $this->input->post('warnahewan');
		$kondisihewan = $this->input->post('kondisihewan');
		$biayaadopsi = $this->input->post('biayaadopsi');

		//upload foto
		$config['max_size'] = 2048;
		$config['allowed_types'] = 'png|jpg|jpeg';
		$config['remove_spaces'] = TRUE;
		$config['overwrite'] = TRUE;
		$config['upload_path'] = './gambar/';

		$this->load->library('upload', $config);

		//ambil foto
		$this->upload->do_upload('photo');
		$data_image = $this->upload->data('file_name');
		$location = base_url().'gambar/';
		$foto = $location.$data_image;
		foreach ($data['user'] as $u) {
		$data = array(
			'penampungan' => $u->username,
			'foto' => $foto,
			'deskripsi' => $deskripsi,
			'nama' => $namahewan, 
			'jenis' => $jenishewan ,
			'ras' => $rashewan,
			'kelamin' => $jeniskelaminhewan,
			'umur' => $umurhewan,
			'warna' => $warnahewan,
			'kesehatan' => $kondisihewan,
			'biaya' => $biayaadopsi
			);
		}
		$this->m_postingHewan->insertPosting($data);
		redirect(base_url('Adopsi'));
	}

}
