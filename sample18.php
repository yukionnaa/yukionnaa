<?php session_start(); ?>
<html>
<head><meta http-equiv="Content-type"
content="text/html;charset=UTF-8" />
<title>sample18.php</title>
</head>

<body>
<h2>メールの送信</h2>
<?php
if ($_SESSION["address"]=="NG"){
	unset($_SESSION["address"]);
	print("E-Mailは必須入力です。"."<br>");
}
if ($_SESSION["subject"]=="NG"){
	unset($_SESSION["subject"]);
	print("タイトルは必須入力です。"."<br>");
}
if ($_SESSION["message"]=="NG"){
	unset($_SESSION["message"]);
	print("コメントは必須入力です。"."<br>");
}
?>
<form method="post" action="./sample18-1.php">
E-Mail:<br /><input type="text" name="address"
<?php print("value='".$_SESSION["address"]."'") ?> size="50" /><br />
タイトル<br /><input type="text" name="subject"
<?php print("value='".$_SESSION["subject"]."'") ?> size="50" /><br />
コメント:<br /><textarea name="message" rows="5" cols="35">
<?php print($_SESSION["message"]) ?></textarea><br /><br />
<input type="submit" value="送信" />
</form>




</body>
</html>

