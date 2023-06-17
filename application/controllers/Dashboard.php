<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$user_id = $this->session->userdata('user_id');

		if($user_id) {
			$this->load->model('User_model');
			$data['users'] = $this->User_model->get_users();

			$this->load->view('templates/providers/styles');
			$this->load->view('templates/ui/preloader');
			$this->load->view('templates/ui/navbar');
			$this->load->view('templates/ui/sidebar');
			$this->load->view('templates/pages/daftar_user', $data);
			
			$this->load->view('templates/providers/js');
		} else {
			redirect('index.php/auth/login');
		}
	}

	public function add() {
		$this->load->view('templates/providers/styles');
		$this->load->view('templates/ui/preloader');
		$this->load->view('templates/ui/navbar');
		$this->load->view('templates/ui/sidebar');
		$this->load->view('templates/pages/add_user');
		$this->load->view('templates/providers/js');
	}

	public function edit($user_id) {
		$this->load->model('User_model');
		$data['user'] = $this->User_model->get_user_by_id($user_id);
		
		$this->load->view('templates/providers/styles');
		$this->load->view('templates/ui/preloader');
		$this->load->view('templates/ui/navbar');
		$this->load->view('templates/ui/sidebar');
		$this->load->view('templates/pages/edit_user', $data);
		$this->load->view('templates/providers/js');
	}

	public function delete($user_id) {
		$this->load->model('User_model');
		$this->User_model->delete_user($user_id);
		redirect('/');
	}

	public function save() {
		$this->load->model('User_model');
		$data = array(
				'full_name' => $this->input->post('name'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'level' => $this->input->post('level'),
		);
		$this->User_model->save_user($data);
		redirect('/');
	}

	public function update($user_id) {
		$this->load->model('User_model');
		$data = array(
			'full_name' => $this->input->post('name'),
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'level' => $this->input->post('level'),
		);
		$this->User_model->update_user($user_id, $data);
		redirect('/');
	}
}
