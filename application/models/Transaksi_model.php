<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Transaksi_model extends CI_Model
{
    public $table = 'Transaksi';
    public $id = 'Transaksi.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function getbycustomer($id)
    {
        $this->db->select('p.*, d.nama as namad,b.nama as namab,b.gambar as gambarb,b.harga as hargab');
        $this->db->from('transaksi p');
        $this->db->join('designer d', 'p.id_designer = d.id');
        $this->db->join('barang b', 'p.id_barang = b.id');
        $this->db->where('p.id_customer', $id);
        $this->db->order_by('tanggal', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getbydesigner($id)
    {
        $this->db->select('t.*, c.nama as namac,b.nama as namab,b.gambar as gambarb,b.harga as hargab');
        $this->db->from('transaksi t');
        $this->db->join('customer c', 't.id_customer = c.id');
        $this->db->join('barang b', 't.id_barang = b.id');
        $this->db->where('t.id_designer', $id);
        $this->db->order_by('t.tanggal', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get()
    {
        $this->db->from($this->table);
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
    public function hasil($data)
    {
        $this->db->from($this->table);;
        $this->db->where('id_designer', $data);
        $this->db->select_sum('total');
        $result = $this->db->get()->row();
        return $result->total;
    }
    public function barangterjual($data)
    {
        $this->db->from($this->table);;
        $this->db->where('id_designer', $data);
        $this->db->select_sum('jumlah');
        $result = $this->db->get()->row();
        return $result->jumlah;
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
    public function presentasi($data)
    {
        $this->db->select('barang.jenis as jenis,sum(transaksi.total) as total,sum(transaksi.jumlah) as jumlah');
        $this->db->from('transaksi');
        $this->db->join('barang','transaksi.id_barang = barang.id');
        $this->db->where('transaksi.id_designer', $data);
        $this->db->group_by('barang.jenis');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getpenjualan()
    {
        $this->db->select('barang.jenis as jenis,sum(transaksi.total) as total,sum(transaksi.jumlah) as jumlah');
        $this->db->from('transaksi');
        $this->db->join('barang','transaksi.id_barang = barang.id');
        $this->db->group_by('barang.jenis');
        $query = $this->db->get();
        return $query->result_array();
    }
}
