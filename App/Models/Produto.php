<?php

namespace App\Models;

use MF\Model\Model;

class Produto extends Model{

    public function getProdutos() {
        $query = "select * from tb_produtos";
        return $this->db->query($query)->fetchAll();
    }

}

?>