<?php

class M_mahasiswa extends CI_Model{

    function getMhs(){
        return $this->db->get('tb_mhs');
    }
    
    function insert($data){
        $this->db->insert('tb_mhs', $data);
    }
    
    function update_Mhs($data, $id){
        $this->db->where('id', $id);
        $this->db->update('tb_mhs', $data);

    }

    function hapus_Mhs($id){
        $this->db->delete('tb_mhs', array('id' => $id));
    }

    function update($id){
        $this->db->where('id', $id);
        return $this->db->get('tb_mhs');
    }

}