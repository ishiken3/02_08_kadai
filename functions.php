<?php
//共通で使うものを別ファイルにしておきましょう。

//管理者DB接続関数（PDO）
function db_conn(){
  try {
    return new PDO('mysql:dbname=sample_dashbord;host=localhost','root','root');
  } catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
  }
}

//SQL処理エラー
function errorMsg($stmt){
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}

/**
* XSS
* @Param:  $str(string) 表示する文字列
* @Return: (string)     サニタイジングした文字列
*/
function h($str){
  return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
}


?>
