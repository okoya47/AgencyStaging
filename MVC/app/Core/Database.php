<?php

trait Database{
    private function connect()
    {
 
        $string = "mysql:host=".DBHOST.";dbname=".DBNAME.";charset=utf8mb4";

        try {
            $con = new PDO($string, DBUSER, DBPASS);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $con;
        } catch (PDOException $e) {
            // Handle any connection errors here
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function query($query, $data = [])
    {
      $con = $this->connect();
      $stm = $con->prepare($query);

      $check = $stm->execute($data);
      if($check)
      {
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        if(is_array($result) && count($result))
        {
            return $result;
        }
      }
      return false;
      
    }

    public function get_row($query, $data = [])
    {
      $con = $this->connect();
      $stm = $con->prepare($query);

      $check = $stm->execute($data);
      if($check)
      {
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        if(is_array($result) && count($result))
        {
            return $result[0];
        }
      }
      return false;
      
    }
}

