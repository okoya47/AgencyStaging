<?php

class pageNotFound extends Controller
{
    public function index(){
        $data['username'] = empty($_SESSION['USER']) ? 'User': $_SESSION['USER']['username'];
        $this->view('Pagenotfound',$data);
    }
}

