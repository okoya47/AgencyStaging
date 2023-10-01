<?php
session_start();
class Home extends Controller
{
    
    public function index($a = '',$b = '', $c = '' ){
        /*
        $user = new User;
        $arr['username'] = "Boom";
        $arr['email'] = "Boom.okoya047@gmail.com"; 
        $arr['referrer'] = "USAagency";
        $arr['Active'] = 1;
        $arr['firstname'] = "Year";
        
        $result = $user->findAll();
        */
        //$result = $user->update(5, $arr);
        //show("From the Home function"); 
        //echo "This is the home controller" . $arr['id'];
        //$user = new User;
        //$arr['email'] = "Boom.okoya047@gmail.com";
        //$result = $user->where($arr);
        

        //echo $_SESSION['USER']; // Access the session variable
        $data['totalDeposits'] = 0;
        if(!(empty($_SESSION['USER']))){
            $deposits = new Transactions();
            $arr['userId'] = $_SESSION['USER']['id'];
            $totalDeposits = $deposits->where($arr);
            $data['totalDeposits'] = $totalDeposits;
        }

        // Whatsup earnings
        $data['whatsupEarnings'] = 0;
        if(!(empty($_SESSION['USER']))){
            $media = new media();
            $arr['userId'] = $_SESSION['USER']['id'];
            $arr['IsActive'] = true;
            $arr['media'] = "Whatsup";
            $whatsupEarnings = $media->mediaEarnings($arr);
            $data['whatsupEarnings'] = $whatsupEarnings;
        }

         // Withdrawals balance
         $data['withdrawals'] = 0;
         if(!(empty($_SESSION['USER']))){
             $media = new Withdrawal();
             $arrWithdrawals['userId'] = $_SESSION['USER']['id'];
             $arrWithdrawals['IsActive'] = true;
             $withdrawals = $media->withDrawals($arrWithdrawals);
             $data['withdrawals'] = $withdrawals;
        }

        // Wallet balance
        $data['wallet'] = 0;
        if(!(empty($_SESSION['USER']))){
            $media = new media();
            $arrWallet['userId'] = $_SESSION['USER']['id'];
            $arrWallet['IsActive'] = true;
            $wallet = $media->mediaEarnings($arrWallet);
            $data['wallet'] = $wallet;
        }

        // Get wallet balance
        $data['walletBalance'] = 0;
        if(!(empty($_SESSION['USER']))){
            $media = new balance();
            $arrBalance['userId'] = $_SESSION['USER']['id'];
            $arrBalance['amount'] = $data['wallet'] - $data['withdrawals'];
            $walletBalance = $media->walletBalance($arrBalance);
            $data['walletBalance'] = $walletBalance;
        }

        $data['username'] = empty($_SESSION['USER']) ? 'User': $_SESSION['USER']['username'];
        //show($_SESSION['USER']);
        //show($_SESSION['USER']['email']);
        $this->view('home',$data);
    }

    public function edit($a = '',$b = '', $c = '' ){
        //show("From the edit function"); 
        //show($a);
        //show($b);
        //show($c);
        $this->view('home', $data);
    }
}

