<?php
/*
 * jQuery File Upload Plugin PHP Example
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * https://opensource.org/licenses/MIT
 */

error_reporting(E_ALL | E_STRICT);
require('UploadHandler.php');

class myUploadHandler extends UploadHandler{
  protected function get_unique_filename($file_path, $name, $size, $type, $error,
    $index, $content_range) {
    $ext = "";
    if(preg_match('/^(.+)\.(.+)$/',$name,$matchs)){
      $ext = ".".$matchs[2];
    }
    $name = uniqid().$ext;
    return $name;
  }
}
$upload_handler = new myUploadHandler();
//$upload_handler = new UploadHandler();
