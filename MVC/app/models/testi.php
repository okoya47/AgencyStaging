<?php

/*
transfer class
*/

class Testi
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

}