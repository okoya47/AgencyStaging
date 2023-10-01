<?php

class Signup extends Controller
{
    
    public function index($a = '',$b = '', $c = '' ){
        $data = [];
        $user =  new User;
        
        if($_SERVER['REQUEST_METHOD'] == "POST"){
                $user->insert($_POST);
                redirect('login');
        }
        $data['errors'] = $errors = $user->errors;
        $this->view('Signup', $data);
    }
}

