<?php

namespace App\Controllers;


use MF\Model\Container;
use MF\Controller\Action;

use App\Models\Produto;
use App\Models\Info;


class IndexController extends Action {

    public function index() {

       // $this->view->dados = array('Sofá', 'Cadeira', 'Cama');
        //instancia de conexão 
        $produto = Container::getModel('Produto');

        $produto = $produto->getProdutos();
        $this->view->dados = $produto;
        $this->render('index', 'leyout3');
    }

    public function sobreNos() {
       

        $info = Container::getModel('info');

        $informacoes = $info->getInfo();
        $this->view->dados = $informacoes;

        $this->render('sobreNos', 'leyout1');
    }



}


?>