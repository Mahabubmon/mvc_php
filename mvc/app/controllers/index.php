<?php 

    class Index extends DController{
       

        function __construct(){
            parent:: __construct();
            $this->load = new Load();

        }

        public function home(){
        //   $this->load->view("home");

       
        }

        public function category(){
        $catModel = $this->load->model("CatModel");
        $catModel->catList();

        }

    }

?>