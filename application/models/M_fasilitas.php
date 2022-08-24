<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_fasilitas extends CI_Model {

   function tampil_fasilitas(){
    return $this->db->query('SELECT * FROM fasilitas')->result_array();
   }

   function tampil_fasilitas2(){
      $this->db->select('*, daftar_fasilitas.id as id_dt');
      $this->db->from('daftar_fasilitas');
      $this->db->join('fasilitas','daftar_fasilitas.id_fasilitas=fasilitas.id');
      $this->db->order_by("daftar_fasilitas.id","desc");

      return $this->db->get()->result_array();
   }

   function detail($id)
   {
      return $this->db->get_where('fasilitas', array('id' => $id))->row_array();
   }

   function image($id)
   {
      return $this->db->get_where('daftar_fasilitas', array('id_fasilitas' => $id))->result_array();
   }

   function jum($id)
   {
      return $this->db->get_where('daftar_fasilitas', array('id_fasilitas' => $id))->num_rows();
   }

}
