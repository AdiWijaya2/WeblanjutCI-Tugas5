<?php

class AsetModel extends CI_Model
{

    private $table = 'tabel_aset';

    public function getAll()
    {
        //select * form KelasController
        return $this->db->get($this->table)->result();
    }

    public function tambah($data_input)
    {
        $this->db->insert($this->table, $data_input);
    }

    public function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
