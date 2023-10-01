<?php
session_start();

class Login extends Controller
{
    public function index($a = '',$b = '', $c = '' ){
        $data = []; 
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $user =  new User;
            if($user->validate($_POST)){
                $arr['email'] = $_POST['email'];
                $row  = $user->first($arr);
                if($row){
                    if($row['password'] === $_POST['password']){
                        $_SESSION['USER'] = $row;
                        redirect('home');
                    }
                }
                $user->errors['email'] = "Wrong password or email!";
            }
            $data['errors'] = $errors = $user->errors;
        }
        
        $this->view('login', $data);
    }
}

