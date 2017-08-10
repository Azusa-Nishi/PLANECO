<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
// Ajax以外からのアクセスを遮断
$request = isset($_SERVER['HTTP_X_REQUESTED_WITH'])
     ? strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) : '';
if($request !== 'xmlhttprequest') exit;
$json = file_get_contents("php://input");
$obj = json_decode($json, true);
$file_name = "save/planet".$obj[0]['unique'].".json";
// ファイル保存のおまじない
$file = fopen($file_name, "w") or die("OPEN error $file_name");
flock($file, LOCK_EX); fputs($file, $json."\n");
flock($file, LOCK_UN);
fclose($file);
?>

