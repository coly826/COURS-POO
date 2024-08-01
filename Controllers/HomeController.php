<?php
namespace Controllers;

use Source\Renderer;
use Models\User;

Class HomeController {

    public function index()//: Renderer 
    {

      
        //   $userModel = new User();  

        //    $users = $userModel->all();
        $renderer=  new Renderer('Home/index');

          var_dump(compact('users'));

      return Renderer::make('Home/index', compact('users'));
      //return $renderer->view();
    }
}
?>