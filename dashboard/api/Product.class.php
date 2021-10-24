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
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute($data);
    return true;
  }

  public function update($data, $id)
  {
    unset($data['id_product']);
    $fileds = '';
    $x = 1;
    $filedsCount = count($data);
    foreach ($data as $field => $value) {
      $fileds .= "{$field} = :{$field}";
      if ($x < $filedsCount) {
        $fileds .= ", ";
      }
      $x++;
    }

    $sql = "UPDATE {$this->tableName} SET {$fileds} WHERE id_product = :id_product";
    $data['id_product'] = $id;
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute($data);
    return true;
  }

  public function getEdit($field, $value)
  {
    $sql = "
    SELECT 
      p.id_product, 
      p.title,
      p.id_category,
      c.title as category,
      p.detail,
      p.detail2,
      p.price,
      p.status,
      p.stock,
      p.photo,
      p.created_at
    FROM 
      {$this->tableName} as p
    LEFT JOIN category as c
    ON p.id_category = c.id_category  WHERE {$field}=:{$field}
    ";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([":{$field}" => $value]);
    if ($stmt->rowCount() > 0) {
      $result = $stmt->fetch();
    } else {
      $result = [];
    }
    return $result;
  }

  public function getAll($start, $limit)
  {
    $sql = "
    SELECT
      p.id_product, 
      p.title,
      p.id_category,
      c.title as category,
      p.detail,
      p.detail2,
      p.price,
      p.status,
      p.stock,
      p.photo,
      p.created_at
    FROM 
      {$this->tableName} as p
    LEFT JOIN category as c
    ON p.id_category = c.id_category
    ORDER BY id_product DESC 
    LIMIT {$start},{$limit}
    ";
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
    $sql = "DELETE FROM {$this->tableName} WHERE id_product = :id_product";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute($id);
    return true;
  }

  public function search($data)
  {
    $sql = "
    SELECT
      p.id_product, 
      p.title,
      p.id_category,
      c.title as category,
      p.detail,
      p.detail2,
      p.price,
      p.status,
      p.stock,
      p.photo,
      p.created_at
    FROM 
      {$this->tableName} as p
    LEFT JOIN category as c
    ON p.id_category = c.id_category
    WHERE p.title LIKE :search
    ORDER BY id_product DESC 
    ";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([':search' => $data]);
    $result = $stmt->fetchAll();
    if ($stmt->rowCount() > 0) {
      return $result;
    } else {
      return false;
    }
  }

  public function uploadPhoto($files)
  {
    function imageResize($imageResourceId, $width, $height)
    {
      $targetWidth = $width < 1280 ? $width : 1280;
      $targetHeight = ($height / $width) * $targetWidth;
      $targetLayer = imagecreatetruecolor($targetWidth, $targetHeight);
      imagecopyresampled($targetLayer, $imageResourceId, 0, 0, 0, 0, $targetWidth, $targetHeight, $width, $height);
      return $targetLayer;
    }

    /** show details */
    function size_as_kb($size = 0)
    {
      if ($size < 1048576) {
        $size_kb = round($size / 1024, 2);
        return "{$size_kb} KB";
      } else {
        $size_mb = round($size / 1048576, 2);
        return "{$size_mb} MB";
      }
    }

    function imgSize($img)
    {
      $targetWidth = $img[0] < 1280 ? $img[0] : 1280;
      $targetHeight = ($img[1] / $img[0]) * $targetWidth;
      return [round($targetWidth, 2), round($targetHeight, 2)];
    }

    if (!empty($files)) {
      $file = $files['tmp_name'];
      $fileName = $files['name'];
      $sourceProperties = getimagesize($file);
      $fileNewName = md5(microtime());
      $folderPath = "../../../assets/image/uploads/";
      $ext = pathinfo($fileName, PATHINFO_EXTENSION);
      $imageType = $sourceProperties[2];
      switch ($imageType) {

        case IMAGETYPE_PNG:
          $imageResourceId = imagecreatefrompng($file);
          $targetLayer = imageResize($imageResourceId, $sourceProperties[0], $sourceProperties[1]);
          imagepng($targetLayer, $folderPath . $fileNewName . "." . $ext);
          break;

        case IMAGETYPE_GIF:
          $imageResourceId = imagecreatefromgif($file);
          $targetLayer = imageResize($imageResourceId, $sourceProperties[0], $sourceProperties[1]);
          imagegif($targetLayer, $folderPath . $fileNewName . "." . $ext);
          break;

        case IMAGETYPE_JPEG:
          $imageResourceId = imagecreatefromjpeg($file);
          $targetLayer = imageResize($imageResourceId, $sourceProperties[0], $sourceProperties[1]);
          imagejpeg($targetLayer, $folderPath . $fileNewName . "." . $ext);
          break;

        default:
          echo "Invalid Image type.";
          exit;
          break;
      }
      $finalFileName = $fileNewName . "." . $ext;
      move_uploaded_file($file . "/uploads/", $finalFileName);
      return $finalFileName;
    } else {
      return false;
    }
  }
}
