<?php
session_start();

class Appwithdrawals extends Controller
{
    public function index($a = '',$b = '', $c = '' ){
        $data['username'] = empty($_SESSION['USER']) ? 'User': $_SESSION['USER']['username'];
        if(!(empty($_SESSION['USER']))){
            $withdrawals =  new Withdrawal();
            $withdrawalData = $withdrawals->findAll();
        }
        $data['withdrawals'] = $withdrawalData;
        $this->view('appwithdrawals', $data);
        $withdrawals =  new Withdrawal();
        if($_SERVER['REQUEST_METHOD'] == "POST"){

        function generateRandomString($length) {
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $randomString = '';
        
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, strlen($characters) - 1)];
            }
        
            
            return $randomString;
        }
            
            $randomCode = generateRandomString(6) . generateRandomString(4);

            $data = [];
            $_POST['userId'] = $_SESSION['USER']['id'];
            $_POST['status'] = 2;
            $_POST['transactioncode'] = generateRandomString(10);
            $_POST['Date'] = date('Y-m-d H:i:s');
            $_POST['IsActive'] = true;
            $withdrawals->insert($_POST);
            
        }
    }
}

