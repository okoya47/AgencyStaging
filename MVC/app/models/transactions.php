<?php

/*
User class
*/

class Transactions
{

    use Model;
    protected $table = "depositdetails";

    protected $allowedColumns =[
    'checkoutRequestId',
    'amount',
    'mpesaReceiptNumber	',
    'resultCode',
    'phoneNumber',
    'userId'
    ];

}