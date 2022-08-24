<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_prestasi_akpol extends CI_Model {

    function tampilData(){
       return $this->db->query("SELECT * FROM prestasi_akpol ORDER BY id DESC")->result_array();
    }

    function tambah_data($image){
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "judul" => $this->input->post('judul',TRUE),
            "isi" => $this->input->post('isi',TRUE),
            "img_cover" => $image,
            "created_at" => date("Y-m-d H:i:s", time()),
        ];
        $this->db->insert('prestasi_akpol',$data);
    }

    function hapus_data($id){
        $this->db->where('id',$id);
        $query = $this->db->get('prestasi_akpol');
        $row = $query->row();
        
        unlink("./assets/backend/upload/$row->img_cover"); 
   
        $this->db->delete('prestasi_akpol',['id' => $id]);
    }

    function ubah_data($file_name){
        date_default_timezone_set("Asia/Jakarta");
        $id = $this->input->post('id',TRUE);

        // update data pengurus

        if($file_name == 1){
            $data = [
                "judul" => $this->input->post('judul',TRUE),
                "isi" => $this->input->post('isi',TRUE),
            ];
        }
        else{
            $data = [
                "judul" => $this->input->post('judul',TRUE),
                "isi" => $this->input->post('isi',TRUE),
                "img_cover" => $file_name,
            ];
        }
        
        $this->db->where('id',$this->input->post('id',TRUE));
        $this->db->update('prestasi_akpol',$data);
    }
    
}
