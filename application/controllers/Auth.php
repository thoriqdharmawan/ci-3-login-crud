<?php 

class Auth extends CI_Controller {	
  public function login() {
		$user_id = $this->session->userdata('user_id');

		if($user_id) {
			redirect('/');
		} else {
			$this->load->view('templates/providers/styles');
			$this->load->view('templates/ui/preloader');
			$this->load->view('templates/pages/login');
			$this->load->view('templates/providers/js');
		}
  }

  public function do_login() {
    $this->load->model('User_model');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $user = $this->User_model->get_user_by_username($username);
    if ($user) {
			// Login berhasil
			// $this->session->set_userdata('user_id', $user->id_user);
			$this->session->set_userdata('user_id', $user);
			redirect('/');
    } else {
			// Login gagal
			$data['error'] = 'Username atau password salah.';
			$this->load->view('templates/providers/styles');
			$this->load->view('templates/ui/preloader');
			$this->load->view('templates/pages/login', $data);
			$this->load->view('templates/providers/js');
    }
	}
	
	public function do_logout() {
		$this->session->sess_destroy();
		redirect('index.php/auth/login');
	}
}