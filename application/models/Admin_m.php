<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_m extends CI_Model {

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null)
    {
        $this->db->from('admin');
        if($id != null) {
        $this->db->where('admin_id', $id);
        }
        
        $query = $this->db->get();
        return $query;
    }
}