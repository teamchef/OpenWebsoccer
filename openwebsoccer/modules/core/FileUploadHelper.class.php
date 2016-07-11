<?php
/******************************************************************
*
* This file is part of OpenWebSoccer-Sim.
*
* OpenWebSoccer-Sim is free software: you can redistribute it
* and/or modify it under the terms of the
* GNU Lesser General Public License
* as published by the Free Software Foundation, either version 3 of
* the License, or any later version.
*
* OpenWebSoccer-Sim is distributed in the hope that it will be
* useful, but WITHOUT ANY WARRANTY; without even the implied
* warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
* See the GNU Lesser General Public License for more details.
*
* You should have received a copy of the GNU Lesser General Public
* License along with OpenWebSoccer-Sim.
* If not, see <http://www.gnu.org/licenses/>.
*
* Author: Ingo Hofmann
* Base Version: OpenWebSoccer-Sim 5.2.4-Snapshot vom 21. Juni 2015
*
* This Version called "OpenWebsoccer" is a advanced modifikation
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
SEC;
define('ALLOWED_EXTENSIONS', 'jpg,jpeg,gif,png');
class FileUploadHelper
{
	FUNCTION uploadImageFile($i18n, $requestParameter, $targetFilename, $targetDirectory)
	{
		$filename = $_FILES[$requestParameter]['name'];
		$ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
		$allowedExtensions = explode(',', ALLOWED_EXTENSIONS);
		if (!in_array($ext, $allowedExtensions)) {
			throw new Exception($i18n->getMessage('validationerror_imageupload_noimagefile'));
		}
		$imagesize = getimagesize($_FILES[$requestParameter]['tmp_name']);
		if ($imagesize === FALSE) {
			throw new Exception($i18n->getMessage('validationerror_imageupload_noimagefile'));
		}
		$type = substr($imagesize['mime'], strrpos($imagesize['mime'], '/') + 1);
		if (!in_array($type, $allowedExtensions)) {
			throw new Exception($i18n->getMessage('validationerror_imageupload_noimagefile'));
		}
		$targetFilename .= '.' . $ext;
		self::_uploadFile($i18n, $requestParameter, $targetFilename, $targetDirectory);
		return $ext;
	}
	FUNCTION _uploadFile($i18n, $requestParameter, $targetFilename, $targetDirectory)
	{
		$errorcode = $_FILES[$requestParameter]['error'];
		if ($errorcode == UPLOAD_ERR_OK) {
			$tmp_name = $_FILES[$requestParameter]['tmp_name'];
			$name = $targetFilename;
			$uploaded = @move_uploaded_file($tmp_name, UPLOAD_FOLDER . $targetDirectory . '/'. $name);
			if (!$uploaded) {
				throw new Exception($i18n->getMessage('error_file_upload_failed'));
			}
		} else {
			throw new Exception($i18n->getMessage('error_file_upload_failed'));
		}
	}
}