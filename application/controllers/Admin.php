<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/*
	 isi :
	 1. Home admin (statistik). Setelah login langsung access method index().

	 vars:

=======
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
>>>>>>> 90f62dae72ee1ffc17be3aab81d2241be3dea6f7
	 */
	public function __construct()
	{
		parent::__construct();
		//pendefinisian folder
		if (!defined('APP')){
		// define('APP', '\application');
			define('APP', '\application');
		}
		if (!defined('CONF')) {
		// define('CONF', '\config');
			define('CONF', '\config');
		}
	}

	public function index(){
		//cek cms setting
		if (file_exists(FCPATH.APP.CONF.'\cms_settings.php')) {
			//cek login
			if ($this->session->userdata('username') and $this->session->userdata('userpass')){
				// redirect(base_url('admin'));
				$data['page'] = "Beranda";
				$this->load->view('core/core',$data);
				$this->load->view('vadmin');
				print(FCPATH.APP.CONF.'\cms_settings.php');
			}else{
				redirect(base_url('login'));
			}
		}else{
			//ke halaman instalasi
			redirect(base_url('installer'));
		}
		unset($data);

	}

	public function logout(){
		// $this->m_aplikasi->putus_koneksi();

		// semua variabel session akan dihapus dari memory
		$array_session = $this->session->all_userdata();
		$this->session->unset_userdata($array_session);
		unset($array_session);
		// memutus session
		$this->session->sess_destroy();

		// kembali lagi ke login
		redirect(base_url('login'));
	}
}
