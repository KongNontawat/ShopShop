<?php

require_once 'DB.class.php';

class Category extends DB
{
  protected $tableName = 'category';

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
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute($data);
    return true;
  }

  public function update($data, $id)
  {
    unset($data['id_category']);
    $fileds = '';
    $x = 1;
    $filedsCount = count($data);
    foreach ($data as $field => $value) {
      $fileds .= "{$field} = :{$field}";
      if($x < $filedsCount) {
        $fileds .= ", ";
      }
      $x++;
    }
    
    $sql = "UPDATE {$this->tableName} SET {$fileds} WHERE id_category = :id_category";
    $data['id_category'] = $id;
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute($data);
    return true;
  }

  public function getCategory($field, $value)
  {
    $sql = "SELECT * FROM {$this->tableName}  WHERE {$field}=:{$field}";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([":{$field}" => $value]);
    if ($stmt->rowCount() > 0) {
      $result = $stmt->fetch();
    } else {
      $result = [];
    }
    return $result;
  }

  public function getAllCategory($start, $limit)
  {
    $sql = "SELECT * FROM {$this->tableName} ORDER BY id_category DESC LIMIT {$start},{$limit}";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
  }

  public function getCount()
  {
    $sql = "SELECT count(*) as count FROM {$this->tableName}";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
  }

  public function delete($id)
  {
    $sql = "DELETE FROM {$this->tableName} WHERE id_category = :id_category";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute($id);
    return true;
  }

  public function search($data)
  {
    $sql = "SELECT * FROM {$this->tableName} WHERE title LIKE :search ORDER BY id_category DESC";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([':search' => $data]);
    $result = $stmt->fetchAll();
    if($stmt->rowCount() > 0) {
      return $result;
    } else {
      return false;
    }
  } 

  public function uploadPhoto($file)
  {
  }
}
