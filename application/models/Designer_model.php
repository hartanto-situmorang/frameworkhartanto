<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Designer_model extends CI_Model
{
    public $table = 'designer';
    public $id = 'designer.id';
    
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->from($this->table);
        $this->db->where('status', 'active');
        $this->db->order_by('rating', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getonadmin()
    {
        $this->db->from($this->table);
        $this->db->order_by('rating', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getByemail()
    {
        $this->db->from($this->table);;
        $this->db->where('email', $this->session->userdata('email'));
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    public function hapusbyadmin($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function getpresentasi()
    {
        $this->db->select('sum(transaksi.total) as total,sum(transaksi.jumlah) as jumlah,designer.nama as nama,designer.rating as rating,designer.id as id');
        $this->db->from('designer');
        $this->db->join('transaksi','transaksi.id_designer= designer.id');
        $this->db->group_by('designer.id');
        $this->db->order_by('rating', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
   
}
