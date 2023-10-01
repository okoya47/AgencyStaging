<?php

/*
User class
*/

class balance
{

    use Model;
    protected $table = "wallet";

    protected $allowedColumns =[
    'userId',
    'amount'
    ];

}