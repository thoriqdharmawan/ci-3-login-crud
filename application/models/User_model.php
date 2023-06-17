<?php

class User_model extends CI_Model {
    public function get_users() {
        $query = $this->db->get('user');
        return $query->result();
    }

    public function delete_user($user_id) {
        $this->db->where('id_user', $user_id);
        $this->db->delete('user');
    }

    public function save_user($data) {
        $this->db->insert('user', $data);
    }

    public function update_user($user_id, $data) {
        $this->db->where('id_user', $user_id);
        $this->db->update('user', $data);
    }

    public function get_user_by_id($user_id) {
        $query = $this->db->get_where('user', array('id_user' => $user_id));
        return $query->row();
    }

    public function get_user_by_username($username) {
        $query = $this->db->get_where('user', array('username' => $username));
        return $query->row();
    }
}
