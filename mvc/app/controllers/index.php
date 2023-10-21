<?php 

    class Index extends DController{
        function __construct(){
            parent::__construct();

        }

        public function home(){
            echo "Home content from index file";
        }

    }

?>