<?php

class KelasModel extends CI_Model
{

    private $table = 'tabel_2001050006';

    public function getAll()
    {
        //select * form KelasController
        return $this->db->get($this->table)->result();
    }
}
