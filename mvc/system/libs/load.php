<?php 

    class Load{
        function __construct(){

        }
        public function view($fileName){
          include 'app/views/'.$fileName.'.php'; 
        }

        public function model($modelName){
          include 'app/models/'.$fileName.'.php'; 

        }
    }
?>