<?php defined('BASEPATH') OR exit('No direct script access allowed');

class master_produk_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('master_produk');
        if($id != null) {
        $this->db->where('id_master', $id);
        }
        
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'nama' => $post['master_produk_name'],
            'id_kategori' => $post['kategori'],
            'satuan' => $post['stn'],
        ];
        $this->db->insert('master_produk', $params);
    }


    public function edit($post)
    {
        $params = [
            'nama' => $post['master_produk_name'],
            'id_kategori' => $post['kategori'],
            'satuan' => $post['stn'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('id_master', $post['id']);
        $this->db->update('master_produk', $params);
    }

    public function del($id)
    {
        $this->db->where('id_master', $id);
        $this->db->delete('master_produk');
    }
}