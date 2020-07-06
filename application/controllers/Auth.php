<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->model('m_auth');
        $this->load->model('m_pengajuan');
        $this->load->model('m_ubah');
    }

    public function index()
    {
        redirect('/auth/beranda');
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
            $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
            $data['nama'] = $datauser[0]['nama_lengkap'];
            $data['foto'] = $datauser[0]['foto'];
            $data['title'] = 'User Registration';
            $this->load->view('templates/auth_header_login', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            echo 'data berhasil ditambahkan!';
        }
    }

    public function beranda()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        // <<<<<<< HEAD
        $data['title'] = 'Beranda Dosen';
        // =======
        $data['array'] = $datauser[0];
        $datapengajuan = $this->m_pengajuan->data_pengajuan_5last();
        $data['pengajuan'] = $datapengajuan;
        // >>>>>>> 42b9dad32abb32577e2d9c6b827f7e01327a92ca
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/beranda');
        $this->load->view('templates/auth_footer');
    }


    public function setelan_dosen()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Pengaturan';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/setting');
        $this->load->view('templates/auth_footer');
    }

    public function sampel_dinamic()
    {
        $this->load->view('auth/sampel_dinamic');
    }

    public function sampel_2()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Contoh2';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/sampel_2');
    }


    public function informasi()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Halaman Informasi';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/informasi');
        $this->load->view('templates/auth_footer');
    }

    public function edit_profil()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $nip = $this->session->userdata('nip');
        $prodi = $this->db->query("SELECT a.nama_prodi FROM tbl_prodi a JOIN tbl_user b WHERE a.id_prodi=b.prodi AND b.nip=$nip")->result_array();

        $data['prodi'] = $prodi[0];
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['array'] = $datauser[0];
        $data['title'] = 'Edit Profil';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/edit_profil');
        $this->load->view('templates/auth_footer');
    }

    public function action_ubah_pass()
    {
        $url = $this->uri->segment(1);
        $nip = $this->session->userdata('nip');
        $datauser = $this->m_auth->data_user($nip);

        // $this->load->helper('form');

        // $this->form_validation->set_rules('password1', '$password2', 'required|trim|min_length[8]|matches[password2]', [
        //     'matches' => 'password tidak sama!',
        //     'min_length' => 'password terlalu singkat, min 8 karakter!'
        // ]);
        // $this->form_validation->set_rules('password1', '$password2', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == FALSE) {
        } else {
            $pass1 = $this->input->post('password1');
            $pass2 = $this->input->post('password2');
            $this->m_ubah_data->ubah_password($nip, $pass1);
            redirect('/' . $url . '/edit_profil/');
        }
    }

    public function action_ubah_nama()
    {
        $url = $this->uri->segment(1);
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $nip = $this->session->userdata('nip');
        $nama_baru = $this->input->post('nama_baru');

        $this->m_ubah_data->ubah_nama($nip, $nama_baru);

        redirect('/' . $url . '/edit_profil/');
    }

    public function action_ubah_prodi()
    {
        $url = $this->uri->segment(1);
        $nip = $this->session->userdata('nip');
        $prodi_terpilih = $this->input->post('prodi_baru');
        if ($prodi_terpilih == 'DIV S') {
            $prodi_baru = "2";
        } elseif ($prodi_terpilih == 'DIV KS') {
            $prodi_baru = "1";
        } elseif ($prodi_terpilih == 'DIII S') {
            $prodi_baru = "3";
        }

        $this->m_ubah_data->ubah_prodi($nip, $prodi_baru);

        redirect('/' . $url . '/edit_profil/');
    }

    public function action_ubah_email()
    {
        $url = $this->uri->segment(1);
        $nip = $this->session->userdata('nip');
        $email_baru = $this->input->post('email_baru');

        $this->m_ubah_data->ubah_email($nip, $email_baru);

        redirect('/' . $url . '/edit_profil/');
    }

    public function action_ubah_nohp()
    {
        $url = $this->uri->segment(1);
        $nip = $this->session->userdata('nip');
        $nohp_baru = $this->input->post('nohp_baru');

        $this->m_ubah_data->ubah_nohp($nip, $nohp_baru);

        redirect('/' . $url . '/edit_profil/');
    }

    public function action_ubah_foto()
    {
        $url = $this->uri->segment(1);
        $nip = $this->session->userdata('nip');
        $foto_baru = $this->input->post('foto_baru');

        $this->m_ubah_data->upload_foto('foto_baru', $nip);

        $nama = $nip . '.jpg';
        $this->m_ubah_data->ubah_foto($nip, $nama);

        redirect('/' . $url . '/edit_profil/');
    }


    public function sampel_chart()
    {
        $this->load->view('auth/sampel_chart');
    }
}
