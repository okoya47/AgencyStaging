<?php

/*
Main modal Trait
*/

Trait Model
{
  use Database;
  
  protected $limit      = 10;
  protected $offset     = 0;
  protected $order_type ="desc";
  protected $order_col  ="id";
  public $errors     = [];

  public function findAll(){
    $query  = "select * from $this->table order by $this->order_col $this->order_type limit $this->limit offset $this->offset";

    $result =  $this->query($query); 
    return $result;
  }
  
  public function where($data, $data_not = [])
  {
    $keys = array_keys($data);
    $keys_not = array_keys($data_not);
    $query = "select * from $this->table where ";

    foreach($keys as $key) {
      $query .= $key . " = :". $key . " && "; 
    }

    foreach($keys_not as $key) {
      $query .= $key . "!= :". $key . " && "; 
    }

    $query = trim($query, " && ");
  
    $query .= " order by $this->order_col $this->order_type limit $this->limit offset $this->offset";
    //$data = array_merge($data, $data_not);
    $result = $this->query($query, $data);
    if($result)
    {
      $totalDeposits = 0;
      foreach($result as $amount){
        $totalDeposits +=$amount['amount'];
      }
      return $totalDeposits;
    }
    return false;  
  }

  //Get username based on id
  public function getUsername($data, $data_not = [])
  {
    $keys = array_keys($data);
    $keys_not = array_keys($data_not);
    $query = "select username from $this->table where ";

    foreach($keys as $key) {
      $query .= $key . "= :". $key . " && "; 
    }

    foreach($keys_not as $key) {
      $query .= $key . "!= :". $key . " && "; 
    }

    $query = trim($query, " && ");

    $query .= " limit $this->limit offset $this->offset";
    //$data = array_merge($data, $data_not);
    $result = $this->query($query, $data);

    if($result)
    {
      return $result[0];
    }
    return false;
  }

  public function first($data, $data_not = [])
  {
    $keys = array_keys($data);
    $keys_not = array_keys($data_not);
    $query = "select * from $this->table where ";

    foreach($keys as $key) {
      $query .= $key . "= :". $key . " && "; 
    }

    foreach($keys_not as $key) {
      $query .= $key . "!= :". $key . " && "; 
    }

    $query = trim($query, " && ");

    $query .= " limit $this->limit offset $this->offset";
    //$data = array_merge($data, $data_not);
    $result = $this->query($query, $data);

    if($result)
    {
      return $result[0];
    }
    return false;
  }

  public function insert($data)
  {
     // Remove unwanted data
     if(!empty($this->allowedColumns)){
      foreach ($data as $key => $value) {
        if (!in_array($key, $this->allowedColumns)) {
            unset($data[$key]);
        }
      }
    }
    $keys = array_keys($data);
    $query = "insert into $this->table (".implode(",", $keys).") values (:".implode(",:", $keys).")";
    $this->query($query, $data);
    return true;
  }

  public function update($id, $data, $id_column = 'id')
  {
    // Remove unwanted data
    if(!empty($this->allowedColumns)){
      foreach ($data as $key => $value) {
        if (!in_array($key, $this->allowedColumns)) {
            unset($data[$key]);
        }
      }
    }
    $keys = array_keys($data);
    $query = "update $this->table set ";

    foreach($keys as $key) {
      $query .= $key . "= :". $key . " , "; 
    }

    $query = trim($query, " , ");

    $query .= " where $id_column = :$id_column";
    echo $query;
    $data[$id_column] = $id;
    $result = $this->query($query, $data);

    //if($result)
   // {
   //   return $result[0];
   // }
    return false;
  }

  // Amount for withdrawals
  public function updateAmount($id, $data, $id_column = 'id')
  {
   
    $keys = array_keys($data);
    $query = "update $this->table set ";

    foreach($keys as $key) {
      $query .= $key . "= :". $key . " , "; 
    }

    $query = trim($query, " , ");

    $query .= " where $id_column = :$id_column";
    $data[$id_column] = $id;
    $result = $this->query($query, $data);
    return false;
  }
  
  public function delete($id, $id_column = 'id')
  {
    $data[$id_column] = $id;
    $query = "delete from $this->table where $id_column = :$id_column";
    $this->query($query, $data);
    echo $query;
  
    return false;
  }

  public function mediaEarnings($data, $data_not = [])
  {
    $keys = array_keys($data);
    $keys_not = array_keys($data_not);
    $query = "select * from $this->table where ";

    foreach($keys as $key) {
      $query .= $key . " = :". $key . " && "; 
    }

    foreach($keys_not as $key) {
      $query .= $key . "!= :". $key . " && "; 
    }

    $query = trim($query, " && ");
  
    $query .= " order by $this->order_col $this->order_type limit $this->limit offset $this->offset";
    //$data = array_merge($data, $data_not);
    $result = $this->query($query, $data);
    if($result)
    {
      $mediaEarnings = 0;
      foreach($result as $amount){
        $mediaEarnings +=$amount['amount'];
      }
      return $mediaEarnings;
    }
    return 0;  
  }

  public function walletBalance($data, $data_not = [])
  {
    $amountInsert = $data;
    $data = array_slice($data, 0, 1);
    
    $keys = array_keys($data);
    $keys_not = array_keys($data_not);
    $query = "select * from $this->table where ";

    foreach($keys as $key) {
      $query .= $key . " = :". $key . " && "; 
    }

    foreach($keys_not as $key) {
      $query .= $key . "!= :". $key . " && "; 
    }

    $query = trim($query, " && ");
  
    $query .= " order by $this->order_col $this->order_type limit $this->limit offset $this->offset";
 
    $resultCheck = $this->query($query, $data);
    if($resultCheck)
    {
      $amountInsert = array_splice($amountInsert, 1, 2);
      $this->updateAmount(13, $amountInsert, $id_column = 'userId');
     
    }
    else
    {
        $this.insert($amountInsert);
    }
    $result = $this->query($query, $data);

    if($result){
      return $result[0]['amount'];
    }
    return 0;
  }

  public function withDrawals($data, $data_not = [])
  {
    $keys = array_keys($data);
    $keys_not = array_keys($data_not);
    $query = "select * from $this->table where ";

    foreach($keys as $key) {
      $query .= $key . " = :". $key . " && "; 
    }

    foreach($keys_not as $key) {
      $query .= $key . "!= :". $key . " && "; 
    }

    $query = trim($query, " && ");
  
    $query .= " order by $this->order_col $this->order_type limit $this->limit offset $this->offset";
    //$data = array_merge($data, $data_not);
    $result = $this->query($query, $data);
    if($result)
    {
      $withDrawals = 0;
      foreach($result as $amount){
        $withDrawals +=$amount['amount'];
      }
      return $withDrawals;
    }
    return 0;  
  }
}