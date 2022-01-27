<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function login(){
		if ($this->input->post('loginAttempt')) {
			$error = false;
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				$valid = $this->root($this->input->post('username'), $this->input->post('password'));
				if ($valid && $valid->status == true) {
					$error = false;
					$this->session->set_userdata('nama', $valid->nama);
					$this->session->set_userdata('id', $valid->id);
					$this->session->set_userdata('level', $valid->level);

					$array = array(
						'error'	=> $error,
						'msg'	=> "Login berhasil",
					);

					$array['href'] = site_url('dashboard');
				} else {
					$error = true;
					$array = array(	
						'error'	=> true,
						'msg'	=> 'Akun tidak terdaftar',
					);
				}
			} else {
				$error = true;
				$array = array(
					'error'	=> $error,
					'user_error'	=> form_error('username'),
					'pass_error'	=> form_error('password'),
				);
			}
			echo json_encode($array);
		} else {
			if ($this->session->userdata('level')) {
				redirect('dashboard');
			}

			$data['filemain']   = "login";
			$data['filecss'] = NULL;
			$data['filejs']  = NULL;
			$data['title']  = 'Halaman Login';
			$this->load->view('public/app', $data);
		}
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */