<?php defined('BASEPATH') OR exit('No direct script access allowed');

class purchase_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('purchase');
        if($id != null) {
        $this->db->where('purchase_id', $id);
        }
        
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'supplier_id' => $post['supplier'],
            'jumlah' => $post['jumlah'],
            'harga' => $post['harga'],
        ];
        $this->db->insert('purchase', $params);
    }


    public function edit($post)
    {
        $params = [
            'supplier_id' => $post['supplier'],
            'jumlah' => $post['jumlah'],
            'harga' => $post['harga'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('purchase_id', $post['supplier']);
        $this->db->update('purchase', $params);
    }

    public function del($id)
    {
        $this->db->where('purchase_id', $id);
        $this->db->delete('purchase');
    }
}