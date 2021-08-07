<?php
$times = $_COOKIE["count"];
if(!isset($times)){
	$times=0;
}else{
	$times++;
}	
setcookie("count",$times,time()+60);//1分間の有効期限
?>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<title>sample12.php</title>
</head>
<body>
<?php
if($times==0){
	print("はじめまして");
}elseif($times==1){
	print("2回目ですね！");
}elseif($times==2){
	print("3回目ですね！");
}else{
	print("いつも有難うございます！");
}
?>
</body>
</html>
