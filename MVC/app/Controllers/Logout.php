<?php
session_start();
class Logout extends Controller
{
    
    public function index($a = '',$b = '', $c = '' ){
        show("Still in the logout");
        show($_SESSION['USER']);
        if(!empty($_SESSION['USER'])){
            show("Out of the logout");
                unset($_SESSION['USER']);
                redirect('login');
        }
    }
}

