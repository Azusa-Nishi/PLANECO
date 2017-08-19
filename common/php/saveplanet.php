<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
// Ajax以外からのアクセスを遮断
$request = isset($_SERVER['HTTP_X_REQUESTED_WITH'])
     ? strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) : '';
if($request !== 'xmlhttprequest') exit;

/*
 * POSTされている＆配列であるか確認
 */
if(isset($_POST) AND is_array($_POST)){
  foreach($_POST AS $key=>$str){
    $post[$key] = htmlspecialchars($str , ENT_QUOTES , "UTF-8");
  }
}

$json = file_get_contents("php://input");
$obj = json_decode($json, true);
if(isset($obj[0]['delete'])){
	$cmd = $obj[0]['delete'];
	system("/bin/rm -f ../../save/planet".$cmd.".json");
	error_log("Planet Delete:".$cmd);
}else{
	$file_name = "../../save/planet".$obj[0]['unique'].".json";
	error_log("Planet Save");
	error_log($file_name);
	// ファイル保存のおまじない
	$file = fopen($file_name, "w") or die("OPEN error $file_name");
	flock($file, LOCK_EX); fputs($file, $json."\n");
	flock($file, LOCK_UN);
	fclose($file);
}
?>
