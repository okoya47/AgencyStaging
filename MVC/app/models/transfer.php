<?php

/*
transfer class
*/

class Transfer
{

    use Model;
    protected $table = "transactions";

    protected $allowedColumns =[
    'transferedTo',
    'transferedFrom',
    'amount	',
    'userIdTo',
    'useridFrom',
    'Date'
    ];

}