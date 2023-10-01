<?php
session_start();

class Transfer extends Controller
{
    public function index($a = '',$b = '', $c = '' ){
        $data['username'] = empty($_SESSION['USER']) ? 'User': $_SESSION['USER']['username'];
        if(!(empty($_SESSION['USER']))){
            $users = new User();
            $transferData =  new Transfers();
            $users = $users->findAll();
            $transfers = $transferData->findAll();
        }
        $data['users'] = $users;
        $data['transfers'] = $transfers;
        $this->view('transfer', $data);
        show($data);
        $transferData =  new Transfers();
        $users = new User();
        if($_SERVER['REQUEST_METHOD'] == "POST"){


            $data = [];
            
            $arr['id'] = $_POST['userIdTo'];
            $result = $users->getUsername($arr);
            $_POST['userIdFrom'] = $_SESSION['USER']['id'];
            $_POST['transferedTo'] = $result['username'];
            $_POST['transferedFrom'] = $_SESSION['USER']['username'];
            $_POST['Date'] = date('Y-m-d H:i:s');

            $transferData->insert($_POST);
            
        }
    }
}

