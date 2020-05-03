<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('kategori');
        if($id != null) {
        $this->db->where('id_kategori', $id);
        }
        
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'nama' => $post['kategori_name'],
            'keterangan' => $post['keterangan'],
            'satuan' => $post['stn'],
            'harga' => $post['hrg'],
        ];
        $this->db->insert('kategori', $params);
    }


    public function edit($post)
    {
        $params = [
            'nama' => $post['kategori_name'],
            'keterangan' => $post['keterangan'],
            'satuan' => $post['stn'],
            'harga' => $post['hrg'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('id_kategori', $post['id']);
        $this->db->update('kategori', $params);
    }

    public function del($id){
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori');
    }
}