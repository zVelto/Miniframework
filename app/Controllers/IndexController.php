<?php

namespace app\Controllers;

use MF\Controller\Action;
use app\Connection;
use app\Models\Produto;

class IndexController extends Action{

    public function index() {
        //$this->view->dados = array('sofá', 'cadeira', 'cama');


        $conn = Connection::getDB();

        $produto = new Produto($conn);

        $produtos = $produto->getProdutos();

        $this->view->dados = $produtos;

        $this->render("index", 'layout1');
    }

    public function sobreNos() {
        //$this->view->dados = array('notebook', 'smartphone');
        $this->render("SobreNos", 'layout1');
    }
    
}

?>