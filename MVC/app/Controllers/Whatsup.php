<?php
session_start();

class Whatsup extends Controller
{
    public function index($a = '',$b = '', $c = '' ){
        $data['username'] = empty($_SESSION['USER']) ? 'User': $_SESSION['USER']['username'];
        $this->view('whatsup',$data);
    }
}

