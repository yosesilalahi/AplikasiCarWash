<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jasa extends CI_Controller {

    function __construct()
	{
        parent::__construct();
        check_not_login();
        $this->load->model('jasa_m');
    }
    
    public function index()
    {
        $data['row'] = $this->jasa_m->get();
        $this->template->load('template', 'jasa/jasa_data', $data);
    }

    public function add()
    {
       $jasa = new stdClass();
       $jasa->id_jasa = null;
       $jasa->nama = null;
       $jasa->keterangan = null;
       $jasa->harga = null;
        $data = array(
            'page' => 'add',
            'row' =>$jasa
        );
        $this->template->load('template', 'jasa/jasa_form', $data);
    }

    public function edit($id)
    {
        $query = $this->jasa_m->get($id);
        if($query->num_rows() > 0) {
           $jasa = $query->row();
            $data = array(
                'page' => 'edit',
                'row' =>$jasa
            );
            $this->template->load('template', 'jasa/jasa_form', $data);
        }else{
            echo "<script>alert('Data Tidak Ditemukan');";
            echo "window.location='".site_url('user')."';</script>";

        }
    }


    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])){
            $this->jasa_m->add($post);
        } else  if(isset($_POST['edit'])){
            $this->jasa_m->edit($post);
        }
        if($this->db->affected_rows() > 0){
            echo "<script>alert('Data Berhasil Disimpan');</script>";
        }
        echo "<script>window.location='".site_url('jasa')."';</script>";

    }

    public function del($id)
    {
        $this->jasa_m->del($id);
        if($this->db->affected_rows() > 0){
            echo "<script>alert('Data Berhasil Dihapus');</script>";
        }
        echo "<script>window.location='".site_url('jasa')."';</script>";
    }
}
