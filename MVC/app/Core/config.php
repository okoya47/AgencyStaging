<?php 

if($_SERVER['SERVER_NAME'] == 'localhost'){

    define('ROOT', 'http://localhost/route/MVC/public');
    define('DBNAME', 'agencysite');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');

}else{
    define('ROOT', 'http://localhost/route/MVC/public');
    define('DBNAME', 'agencysite');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');
    //define('ROOT', ' https://2911-41-90-66-245.ngrok-free.app/route/MVC/public');
}

define('APP_NAME', 'USA_AGENCY');

/* To show errors */
define('DEBUG', true);
?>