<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    protected $user_model;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('User_model');
        $this->user_model = new User_model;
    }

    public function index()
    {
        $this->_redirect_logged_in_user();
        $data['title'] = 'Login Page - ';
        $data['section'] = 'auth/login';

        if ($this->_login_validation() == FALSE) {
            $this->load->view('layouts/auth', $data);
        } else {
            $this->_login();
        }
    }

    public function logout()
    {
        if ($this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been successfully logout!</div>');
        }

        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('id');
        redirect('auth');
    }

    public function register()
    {
        $this->_redirect_logged_in_user();
        $data['title'] = 'Register Page - ';
        $data['section'] = 'auth/register';

        if ($this->_register_validation() == FALSE) {
            $this->load->view('layouts/auth', $data);
        } else {
            $result = $this->user_model->create();

            if ($result) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your account has been created!</div>');
                redirect('auth');
            }
        }
    }

    private function _register_validation()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
            'is_unique' => 'Email is already registered!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'min_length' => 'Password too short!'
        ]);

        return $this->form_validation->run();
    }

    private function _login_validation()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        return $this->form_validation->run();
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->user_model->get_user_by_email($email);

        if ($user && password_verify($password, $user['password'])) {
            $data = [
                'email' => $user['email'],
                'role' => $user['role'],
                'id' => $user['id'],
            ];
            $this->session->set_userdata($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">OK!</div>');
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><span class="text-white">Invalid login detail!</span></div>');
            redirect('auth');
        }
    }

    private function _redirect_logged_in_user()
    {
        if ($this->session->userdata('email')) {
            redirect('dashboard');
        }
    }
}
