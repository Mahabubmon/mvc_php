<?php 
namespace App\Mvc;

use App\Mvc\Controller;
use App\Mvc\User;

class UserController extends Controller{
    public function index(){
        $user = [
            new User('rahul','rahul@test.com'),
            new User('arif','arif@test.com')
        ];
        $this->render('user/index',['user'=> $user]);
    }

}


?>