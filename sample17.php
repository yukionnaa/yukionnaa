<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<title>sample17.php</title>
</head>
<body>
File Uploader<br><br>
<?php
$updir="./";
$filename=$_FILES["upfile"]["name"];
if(move_uploaded_file($_FILES["upfile"]["tmp_name"]
	,$updir.$filename)==FALSE){
	print("アップロードは失敗しました。");
	print($_FILES["upfile"]["error"]);
}else{
	print($filename."をアップロードしました。");
}
?>
</body>
</html>	
