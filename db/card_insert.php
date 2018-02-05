<?php
// DBとの接続
require_once 'dbconnect.php';
//値の受け取り
$number  = $_REQUEST['number'];
$name = $_REQUEST['name'];
$expiry  = $_REQUEST['expiry'];
$cvc = $_REQUEST['cvc'];

  $sql = "INSERT INTO card_tb VALUES(null, '$number', '$name', '$expiry', '$cvc')";

$result = $mysqli -> query($sql);

//クエリー失敗
if(!$result) {
    echo $mysqli->error;
    exit();
}
else{
  // データベース切断
  $mysqli->close();
}
?>