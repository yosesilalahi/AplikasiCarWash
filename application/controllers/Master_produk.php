<?php defined('BASEPATH') OR exit('No direct script access allowed');

class master_produk extends CI_Controller {

    function __construct()
	{
        parent::__construct();
        check_not_login();
        $this->load->model(['master_produk_m', 'kategori_m']);
    }
    
    public function index()
    {
        $data['row'] = $this->master_produk_m->get();
        $this->template->load('template', 'master_produk/master_produk_data', $data);
    }

    public function add()
    {
        $master_produk = new stdClass();
        $master_produk->id_master = null;
        $master_produk->nama = null;
        $master_produk->satuan = null;
        $query_kategori = $this->kategori_m->get();
        $data = array(
            'page' => 'add',
            'row' => $master_produk,
            'kategori' => $query_kategori,
        );
        $this->template->load('template', 'master_produk/master_produk_form', $data);
    }


    public function edit($id)
    {
        $query = $this->master_produk_m->get($id);
        if($query->num_rows() > 0) {
            $master_produk = $query->row();
            $query_kategori = $this->kategori_m->get();
            $data = array(
                'page' => 'edit',
                'row' => $master_produk,
                'kategori' => $query_kategori
            );
            $this->template->load('template', 'master_produk/master_produk_form', $data);
            }else{
                echo "<script>alert('Data Tidak Ditemukan');";
                echo "window.location='".site_url('master_produk')."';</script>";

        }
    }


    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])){
            $this->master_produk_m->add($post);
        } else  if(isset($_POST['edit'])){
            $this->master_produk_m->edit($post);
        }
        if($this->db->affected_rows() > 0){
            echo "<script>alert('Data Berhasil Disimpan');</script>";
        }
        echo "<script>window.location='".site_url('master_produk')."';</script>";

    }

    public function del($id)
    {
        $this->master_produk_m->del($id);
        if($this->db->affected_rows() > 0){
            echo "<script>alert('Data Berhasil Dihapus');</script>";
        }
        echo "<script>window.location='".site_url('master_produk')."';</script>";
    }
}
