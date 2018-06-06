<?php
//1. DB接続します
try {
  $pdo = new PDO('mysql:dbname=sample_dashbord;host=localhost','root','root');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。:'.$e->getMessage());
}

//
//２．データ登録SQL作成
$stmt = $pdo->prepare("select * from sales");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("sqlerror:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view .= $result["id"];
  }
};

////////////ここから各データをSQLで抜き出し////////////


////////////uu数のカウント////////////
$sql_id = 'select(select count(*) from sales) as  uu';
$stmt_id = $pdo->query($sql_id);
$result_id = $stmt_id->fetch(PDO::FETCH_ASSOC);

////////////売上のカウント////////////
$sql_sales = 'select(select sum(sales) from sales ) as  sum_sales';
$stmt_sales = $pdo->query($sql_sales);
$result_sales = $stmt_sales->fetch(PDO::FETCH_ASSOC);


////////////売上のカウント////////////
$sql_m_sales = 'select(select count(*) from sales) as m_sales';//maxのsqlが何かおかしいのでカウントにしている
$stmt_m_sales = $pdo->query($sql_m_sales);
$result_m_sales = $stmt_m_sales->fetch(PDO::FETCH_ASSOC);



////////////2018/5/27のカウント////////////
$sql_time_27 = 'select(SELECT sum(sales)FROM sales WHERE dates BETWEEN "2018/5/27 00:00:00" AND "2018/5/27 23:59:59") as time_27';
$stmt_time_27 = $pdo->query($sql_time_27);
$result_time_27 = $stmt_time_27->fetch(PDO::FETCH_ASSOC);

////////////2018/5/28のカウント////////////
$sql_time_28 = 'select(SELECT sum(sales)FROM sales WHERE dates BETWEEN "2018/5/28 00:00:00" AND "2018/5/28 23:59:59") as time_28';
$stmt_time_28 = $pdo->query($sql_time_28);
$result_time_28 = $stmt_time_28->fetch(PDO::FETCH_ASSOC);

////////////2018/5/29のカウント////////////
$sql_time_29 = 'select(SELECT sum(sales)FROM sales WHERE dates BETWEEN "2018/5/29 00:00:00" AND "2018/5/29 23:59:59") as time_29';
$stmt_time_29 = $pdo->query($sql_time_29);
$result_time_29 = $stmt_time_29->fetch(PDO::FETCH_ASSOC);

////////////2018/5/30のカウント////////////
$sql_time_30 = 'select(SELECT sum(sales)FROM sales WHERE dates BETWEEN "2018/5/30 00:00:00" AND "2018/5/30 23:59:59") as time_30';
$stmt_time_30 = $pdo->query($sql_time_30);
$result_time_30 = $stmt_time_30->fetch(PDO::FETCH_ASSOC);



////////////商品A売上のカウント////////////
$sql_sales_a = 'select(select sum(sales) from sales where product = "商品A" ) as  sum_sales_a';
$stmt_sales_a = $pdo->query($sql_sales_a);
$result_sales_a = $stmt_sales_a->fetch(PDO::FETCH_ASSOC);

////////////商品B売上のカウント////////////
$sql_sales_b = 'select(select sum(sales) from sales where product = "商品B" ) as  sum_sales_b';
$stmt_sales_b = $pdo->query($sql_sales_b);
$result_sales_b = $stmt_sales_b->fetch(PDO::FETCH_ASSOC);

////////////商品C売上のカウント////////////
$sql_sales_c = 'select(select sum(sales) from sales where product = "商品C" ) as  sum_sales_c';
$stmt_sales_c = $pdo->query($sql_sales_c);
$result_sales_c = $stmt_sales_c->fetch(PDO::FETCH_ASSOC);

////////////商品D売上のカウント////////////
$sql_sales_d = 'select(select sum(sales) from sales where product = "商品D" ) as  sum_sales_d';
$stmt_sales_d = $pdo->query($sql_sales_d);
$result_sales_d = $stmt_sales_d->fetch(PDO::FETCH_ASSOC);

////////////商品E売上のカウント////////////
$sql_sales_e = 'select(select sum(sales) from sales where product = "商品E" ) as  sum_sales_e';
$stmt_sales_e = $pdo->query($sql_sales_e);
$result_sales_e = $stmt_sales_e->fetch(PDO::FETCH_ASSOC);

////////////商品F売上のカウント////////////
$sql_sales_f = 'select(select sum(sales) from sales where product = "商品F" ) as  sum_sales_f';
$stmt_sales_f = $pdo->query($sql_sales_f);
$result_sales_f = $stmt_sales_f->fetch(PDO::FETCH_ASSOC);


?>