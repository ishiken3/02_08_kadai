<?php
//1. POSTデータ取得

if(
!isset($_POST["userid"])||$_POST["userid"]==""||
!isset($_POST["mail"])||$_POST["mail"]==""||
!isset($_POST["product"])||$_POST["product"]==""||
!isset($_POST["sales"])||$_POST["sales"]==""||
!isset($_POST["numbers"])||$_POST["numbers"]==""
){
	exit('ParamError');
}

$userid = $_POST["userid"];
$mail = $_POST["mail"];
$product = $_POST["product"];
$sales = $_POST["sales"];
$numbers = $_POST["numbers"];

//2. DB接続します
try {
  $pdo = new PDO('mysql:dbname=ishi-ken_test;host=mysql630.db.sakura.ne.jp','ishi-ken','qZWAXQh8');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。:'.$e->getMessage());
}


//３．データ登録SQL作成
$sql = "INSERT INTO sales(id,user_id,mail,product,sales,numbers,dates) VALUES(null,:a1,:a2,:a3,:a4,:a5,sysdate())";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $userid, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $mail, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $product, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', $sales, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a5', $numbers, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("sqlのエラーが発生してます。:".$error[2]);
}else{
  //５．index.phpへリダイレクト
header('Location: dashboard.php');
}
?>
