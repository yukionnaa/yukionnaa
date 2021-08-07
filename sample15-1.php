<?php
session_start();//セッションの継続
?>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<title>sample15-1.php</title>
</head>
<body>
<?php
//セッションIDを表示
print("session_id=".session_id()."<br><br>");
//セッション変数へ代入
$_SESSION["syouhin"] .= $_POST["sname"]."　";
print("商品名：".$_SESSION["syouhin"]."<br><br>");
?>
追加で商品を登録する
<a href="./sample15.php?<?=SID?>">back</a><br>
</body>
</html>
