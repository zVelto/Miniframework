<?php

    namespace app\Controllers;

    use MF\Controller\Action;

    class IndexController extends Action{

        public function index() {
            $this->view->dados = array('sofá', 'cadeira', 'cama');
            $this->render("index");
        }

        public function sobreNos() {
            $this->view->dados = array('notebook', 'smartphone');
            $this->render("SobreNos");
        }
        
    }

?>