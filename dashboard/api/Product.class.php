<?php

require_once 'DB.class.php';

class Product extends DB
{
  protected $tableName = 'product';

  public function add($data)
  {
    if (!empty($data)) {
      $fileds = $placholders = [];
      foreach ($data as $field => $value) {
        $fileds[] = $field;
        $placholders[] = ":{$field}";
      }
    }
    $sql = "INSERT INTO {$this->tableName} (" . implode(',', $fileds) . ") VALUES (" . implode(',', $placholders) . ")";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute($data);
    return true;
  }

  public function getRow($field, $value)
  {
    $sql = "SELECT * FROM {$this->tableName}  WHERE {$field}=:{$field}";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([":{$field}" => $value]);
    if ($stmt->rowCount() > 0) {
      $result = $stmt->fetch();
    } else {
      $result = [];
    }
    return $result;
  }

  public function getAllProduct()
  {
    $sql = "SELECT * FROM {$this->tableName}";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
  }

  public function uploadPhoto($file)
  {
  }
}
