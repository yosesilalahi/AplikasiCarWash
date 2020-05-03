<?php
Class Fungsi{

    protected $ci;

    function__construct(){
        $this->ci =& get_instance();
    }

    function admin_login(){
        $this->ci->load->model('admin_m');
        $adminid = $this->ci->session->userdata('adminid');
        $user_data = $this->ci->admin_m->get($admin_id)->row();
        return $user_data;
    }

}