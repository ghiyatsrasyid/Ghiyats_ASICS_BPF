<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Produk_model extends CI_Model
{
    public $table = 'produk';
    public $id = 'produk.id';
    private $_client;
    public function __construct()
    {
        parent::__construct();
        $this->_client = new Client([
            'base_uri' => 'http://localhost/rest_api_ghiyats/produk'
        ]);
    }

    public function get()
    {
        // $this->db->from($this->table);
        // $query = $this->db->get();
        // return $query->result_array();
        $response = $this->_client->request('GET', 'produk');
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    // public function update($where, $data)
    public function update($where,$data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
        // $response = $this->_client->request('PUT', 'produk');
        // $result = json_decode($response->getBody()->getContents(), true);
        // return $result;
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
        // $response = $this->_client->request('POST', 'produk', ['form_params' => $data]);
        // $result = json_decode($response->getBody()->getContents(), true);
        // return $result;
    }

    public function delete($id)
    {
        // $this->db->where($this->id, $id);
        // $this->db->delete($this->table);
        // return $this->db->affected_rows();
        $response = $this->_client->request('DELETE', 'produk', [
            'form_params' => [
                'id' => $id
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function min_stok($stok, $idp)
    {
        $query = $this->db->set('stok','stok-' . $stok, false);
        $query = $this->db->where('id', $idp);
        $query = $this->db->update($this->table);
        return $query;
    }

    public function tproduk(){
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->num_rows();
    }
}
?>