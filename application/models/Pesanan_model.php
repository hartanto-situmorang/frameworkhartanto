<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pesanan_model extends CI_Model
{
    public $table = 'Pesanan';
    public $id = 'Pesanan.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function getbycustomer($id)
    {
        $this->db->select('p.*, d.nama as namad,b.nama as namab,b.gambar as gambarb,b.harga as hargab');
        $this->db->from('pesanan p');
        $this->db->join('designer d', 'p.id_designer = d.id');
        $this->db->join('barang b', 'p.id_barang = b.id');
        $this->db->where('p.id_customer', $id);
        $this->db->order_by('tanggal', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getbydesigner($id)
    {
        $this->db->select('p.*, c.nama as namac,b.nama as namab,b.gambar as gambarb,b.harga as hargab');
        $this->db->from('pesanan p');
        $this->db->join('customer c', 'p.id_customer = c.id');
        $this->db->join('barang b', 'p.id_barang = b.id');
        $this->db->where('p.id_designer', $id);
        $this->db->order_by('tanggal', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    // notif designer
    public function notif($data)
    {
        $this->db->from($this->table);
        $this->db->where('baca', 'belum');
        $this->db->where('id_designer', $data);
        $query = $this->db->get();
        return $query->result_array();
    }

    // notif customer
    public function notifc($data)
    {
        $this->db->from($this->table);
        $this->db->where('baca_customer', 'belum');
        $this->db->where('id_customer', $data);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function get_where($data)
    {
        $this->db->from($this->table);;
        $this->db->where($data);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getwhere($data)
    {
        $this->db->from($this->table);
        $this->db->where($data);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function baca($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function terima($where, $data)
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

    public function notifcount($data)
    {
        $this->db->from($this->table);
        $this->db->where('baca', 'belum');
        $this->db->where('id_designer', $data);
        $query = $this->db->get();
        return $query->num_rows();
    }
    // notif customer
    public function notifcountc($data)
    {
        $this->db->from($this->table);
        $this->db->where('baca_customer', 'belum');
        $this->db->where('id_customer', $data);
        $query = $this->db->get();
        return $query->num_rows();
    }
}
