<?php

    namespace app\Controllers;

use stdClass;

class IndexController {

        private $view;

        public function __construct() {
            $this->view = new \stdClass();
        }

        public function index() {
            $this->view->dados = array('sofá', 'cadeira', 'cama');
            $this->render("index");
        }

        public function sobreNos() {
            $this->view->dados = array('notebook', 'smartphone');
            $this->render("SobreNos");
        }

        public function render($view) {

            $classAtual = get_class($this);

            $classAtual = str_replace('app\\Controllers\\', '', $classAtual);

            $classAtual = strtolower(str_replace('Controller', '', $classAtual));

            require_once "../app/Views/index/".$view.".phtml";
        }
    }



?>