<?php defined('BASEPATH') OR exit('No direct script access allowed');

class purchase extends CI_Controller {

    function __construct()
	{
        parent::__construct();
        check_not_login();
        $this->load->model(['purchase_m', 'supplier_m']);
    }
    
    public function index()
    {
        $data['row'] = $this->purchase_m->get();
        $this->template->load('template', 'purchase/purchase_data', $data);
    }

    public function add()
    {
        $purchase = new stdClass();
        $purchase->purchase_id = null;
        $purchase->jumlah = null;
        $purchase->harga = null;
        $query_supplier = $this->supplier_m->get();
        $data = array(
            'page' => 'add',
            'row' => $purchase,
            'supplier' => $query_supplier,
            
        );
        $this->template->load('template', 'purchase/purchase_form', $data);
    }


    public function edit($id)
    {
        $query = $this->purchase_m->get($id);
        if($query->num_rows() > 0) {
            $purchase = $query->row();
            $query_supplier = $this->supplier_m->get();
            $data = array(
                'page' => 'edit',
                'row' => $purchase,
                'supplier' => $query_supplier,
            );
            $this->template->load('template', 'purchase/purchase_form', $data);
            }else{
                echo "<script>alert('Data Tidak Ditemukan');";
                echo "window.location='".site_url('purchase')."';</script>";

        }
    }


    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])){
            $this->purchase_m->add($post);
        } else  if(isset($_POST['edit'])){
            $this->purchase_m->edit($post);
        }
        if($this->db->affected_rows() > 0){
            echo "<script>alert('Data Berhasil Disimpan');</script>";
        }
        echo "<script>window.location='".site_url('purchase')."';</script>";

    }

    public function del($id)
    {
        $this->purchase_m->del($id);
        if($this->db->affected_rows() > 0){
            echo "<script>alert('Data Berhasil Dihapus');</script>";
        }
        echo "<script>window.location='".site_url('purchase')."';</script>";
    }
}
