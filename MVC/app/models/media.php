<?php

/*
User class
*/

class media
{

    use Model;
    protected $table = "socialmedia";

    protected $allowedColumns =[
    'media',
    'amount',
    'IsActive	',
    'status',
    'phoneNumber',
    'userId'
    ];

}