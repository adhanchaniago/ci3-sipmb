<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $table_users = 'users';
    private $table_user_profiles = 'user_profiles';

    public function __construct()
    {
        $this->load->database();
    }

    public function create($user = [])
    {
        $user = [
            'email' => htmlspecialchars($this->input->post('email')),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role' => 2,
            // 'activated_at' => time(),
            'created_at' => date('c'),
            'updated_at' => date('c'),
        ];

        $this->db->trans_start();
        $this->db->insert($this->table_users, $user);
        $this->db->insert($this->table_user_profiles, [
            'user_id' => $this->db->insert_id(),
        ]);
        $this->db->trans_complete();

        return $this->db->trans_status();
    }

    public function get_user_by_email($email = '')
    {
        $this->db->join('user_profiles', 'user_profiles.user_id = users.id');
        return $this->db->get_where($this->table_users, ['email' => $email])->row_array();
    }
}
