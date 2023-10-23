<?php 

    class CatModel{

        function __construct(){
            // echo "Category model";
        }

        public function catlist(){
           return array(
                'catOne'=>'Education',
                'cattwo'=>'Sports',
                'catThree'=>'Health',
            
            
            );

        }
    }

?>