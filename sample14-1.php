<?php
session_start();//セッションの継続
?>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<title>sample14-1.php</title>
</head>
<body>
<?php
print("session_id=".session_id()."<br><br>");	//セッションIDを表示
$_SESSION["syouhin"] .= $_POST["sname"]."　";		//セッション変数へ代入
print("商品名：".$_SESSION["syouhin"]."<br><br>");
?>
追加で商品を登録する<a href="./sample14.php">back</a><br>
</body>
</html>
