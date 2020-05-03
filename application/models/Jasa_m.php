<?php defined('BASEPATH') OR exit('No direct script access allowed');

class jasa_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('jasa');
        if($id != null) {
        $this->db->where('id_jasa', $id);
        }
        
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'nama' => $post['jasa_name'],
            'keterangan' => $post['keterangan'],
            'harga' => $post['hrg'],
        ];
        $this->db->insert('jasa', $params);
    }


    public function edit($post)
    {
        $params = [
            'nama' => $post['jasa_name'],
            'keterangan' => $post['keterangan'],
            'harga' => $post['hrg'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('id_jasa', $post['id']);
        $this->db->update('jasa', $params);
    }

    public function del($id){
        $this->db->where('id_jasa', $id);
        $this->db->delete('jasa');
    }
}