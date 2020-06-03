<?php

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_auth');
	}

	function index()
	{
		redirect(base_url('login/login'));
	}

	function login()
	{
		$data['title'] = 'Halaman Masuk';
		$data['error'] = $this->uri->segment(3);
		$this->load->view('templates/auth_header_login', $data);
		$this->load->view('auth/login');
		$this->load->view('templates/auth_footer_login');
	}
	public function registration()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'password dont match!',
			'min_length' => 'password too short!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'User Registration';
			$this->load->view('templates/auth_header_login', $data);
			$this->load->view('auth/registration');
			$this->load->view('templates/auth_footer');
		} else {
			echo 'data berhasil ditambahkan!';
		}
	}
	function aksi_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$login_as= $this->input->post('login_as');
		$where = array(
			'email' => $email,
			'password' => md5($password)
		);
		$cek = $this->m_auth->cek_login("tbl_user", $where)->num_rows();

		if ($cek > 0) {
			$data = $this->m_auth->cek_login("tbl_user", $where)->result_array();
			if($login_as=='admin' && $data[0]['role']==1){
				$home='/admin/beranda_admin';
			}elseif($login_as=='dosen' && ($data[0]['role']==2 || $data[0]['role']==3 || $data[0]['role']==4)){
				$home='/auth/beranda';
			}elseif($login_as=='penilai' && ($data[0]['role']==5 || $data[0]['role']==4)){
				$home='/admin/beranda_admin';
			}elseif($login_as=='verificator' && ($data[0]['role']==3 || $data[0]['role']==4)){
				$home='/admin/beranda_admin';
			}else{
				$home='login/login/role';
			}
			if($home!='login/login/role'){
			$data_session = array(
				'nip' => $data[0]['nip'],
				'role' => $data[0]['role'],
				'status' => "login",
				'home'	=> $home
			);

			$this->session->set_userdata($data_session);
			}
			redirect(base_url($home));
		} else {
			redirect(base_url('login/login/error'));
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
	function test()
	{
		$where = array(
			'email' => 'dosen@stis.id',
			'password' => '9f08e0e14eb93c9cd05fdcae991d5f35'
		);
		$cek = $this->m_login->cek_login("tbl_user", $where)->result_array();
		print_r($cek[0]['nip']);
	}
}
