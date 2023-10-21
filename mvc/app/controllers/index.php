<?php 

    class Index extends DController{
        $load;

        function __construct(){
            parent::__construct();

        }

        public function home(){
          $this->load->view("home");
        }

    }

?>