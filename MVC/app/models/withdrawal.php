<?php

/*
Media class
*/

class Withdrawal
{
    use Model;
    
    protected $table = "withdrawals";

    protected $allowedColumns =[
    'userId',
    'amount',
    'status',
    'Date',
    'transactioncode',
    'IsActive'
    ];

}