<?php
session_start();
if(empty($_POST["address"])){
	$_SESSION["address"] = "NG";
}else{
	$_SESSION["address"] = $_POST["address"];
}
if(empty($_POST["subject"])){
	$_SESSION["subject"] = "NG";
}else{
	$_SESSION["subject"] = $_POST["subject"];
}
if(empty($_POST["message"])){
	$_SESSION["message"] = "NG";
}else{
	$_SESSION["message"] = $_POST["message"];
}
if($_SESSION["address"]=="NG" or
$_SESSION["subject"]=="NG" or
$_SESSION["message"]=="NG"){
	header("Location: sample18.php?".SID);
	exit;
}
?>
<html>
<head><meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<title>sample18-1.php</title>
</head>

<body>
<?php
$address=$_POST["address"];
$subject=$_POST["subject"];
$message=$_POST["message"];
$header="From:wa25352@zb4.so-net.ne.jp\nContent-Type:text/plain;charset=iso-2022-jp";
mb_language("Japanese");
mb_internal_encoding("UTF-8");
if(mb_send_mail($address,$subject
,mb_convert_encoding($message,"JIS","UTF-8"),$header)){
	print("送信完了!");
}else{
	print("エラー：送信に失敗しました");
}
?>

</body>
</html>


