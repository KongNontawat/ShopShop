<?php

class Helper
{
	/** Method สำหรับการเช็ครูปภาพ Mime Image */
	public static function isMimeValid($tmp_name)
	{
		$finfo = finfo_open(FILEINFO_MIME_TYPE);
		$mtype = finfo_file($finfo, $tmp_name);
		if (strpos($mtype, 'image/') !== false) {
			return true;
		}
		finfo_close($finfo);
		return false;
	}

	/** clean */
	public static function clean($input)
	{
		/** เปลี่ยน predefined characters เป็น HTML entities ด้วยฟังก์ชัน htmlspecialchars() */
		$data = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
		return $data;
	}

	public static function uploadPhoto($files, $folderPath = '' )
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
			// $folderPath = "../../../assets/image/uploads/";
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
