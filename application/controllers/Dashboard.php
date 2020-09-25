<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    protected $user_model;

    public function __construct()
    {
        parent::__construct();
        $this->_redirect_guest();
        $this->load->model('User_model');
        $this->user_model = new User_model;
    }

    public function index()
    {
        $email = $this->session->userdata('email');
        $data['user'] = $this->user_model->get_user_by_email($email);
        $data['section'] = 'dashboard/dashboard_view';
        $data['title'] = 'Dashboard - ';

        $this->load->view('layouts/dashboard', $data);
    }

    public function user_profile()
    {
        $email = $this->session->userdata('email');
        $data['user'] = $this->user_model->get_user_by_email($email);
        $data['section'] = 'dashboard/user_profile_view';
        $data['title'] = 'Dashboard -> User Profile - ';

        $this->load->view('layouts/dashboard', $data);
    }

    private function _redirect_guest()
    {
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Please login with your account!</div>');
            return redirect('auth');
        }
    }
}
