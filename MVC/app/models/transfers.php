<?php

/*
transfer class
*/

class Transfers
{

    use Model;
    protected $table = "transactions";

    protected $allowedColumns =[
    'transferedTo',
    'transferedFrom',
    'amount',
    'userIdTo',
    'userIdFrom',
    'Date'
    ];

    public function validate($data){
        $this->errors = [];

        if(empty($data['email'])){
            $this->errors['email'] = "Email is required";
        }else
        if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
            $this->errors['email'] = "Email is not valid";
        }

        if(empty($data['password'])){
            $this->errors['password'] = "Password is required";
        }

        if(empty($this->errors)){
            return true;
        }else{
            return false;
        }
    }

    public function validateRegister($data){
        $this->errors = [];
        if(empty($data['fullname'])){
            $this->errors['fullname'] = "Full names is required!";
        }
        if(empty($data['phonenumber'])){
            $this->errors['phonenumber'] = "Phone number is required!";
        }
        if(empty($data['username'])){
            $this->errors['username'] = "Username is required!";
        }
        if(empty($data['password'])){
            $this->errors['password'] = "Password is required!";
        }
        if(empty($data['confirmpassword'])){
            $this->errors['confirmpassword'] = "Confirm password is required!";
        }
        
        if(empty($data['email'])){
            $this->errors['email'] = "Email is required";
        }else
        if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
            $this->errors['email'] = "Email is not valid";
        }

        if(empty($data['password'])){
            $this->errors['password'] = "Password is required";
        }

        if(empty($data['password']) && empty($data['confirmpassword'])){
            if($data['password'] != $data['confirmpassword'])
            {
                $this->errors['password'] = "Password not same as the confirm password.";
            }
        }

        if(empty($this->errors)){
            return true;
        }else{
            return false;
        }
    }
}