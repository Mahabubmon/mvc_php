<?php 

    class Index extends DController{
       

        function __construct(){
            parent:: __construct();
            $this->load = new Load();

        }

        public function home(){
          $this->load->view("home");
        }

    }

?>