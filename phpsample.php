<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>無題ドキュメント</title>
<!-- CSSの読み込み -->
	<link rel="stylesheet" href="testtest/flickity.css"/>
	<!-- JavaScriptの読み込み -->

<script src="testtest/flickity.pkgd.min.js"></script>
<script src="testtest/testtesttest.js"></script>


</head>

<body>


<div class="test">
  <div><img src="testtest/ロゴ1.gif"></div>
  <div><img src="testtest/000011.jpg"></div>
  <div><img src="testtest/000022.jpg"></div>
</div>



















<div>
<?php
require_once 'h.php';
echo '<p>結果<br>';
echo 'お名前: ';
if(isset($_POST['name'])) {
	echo h($_POST['name']);
}
echo '<br>性別: ';
if(isset($_POST['gender'])) {
	echo h($_POST['gender']);
}
echo '</p><hr>';
?>
<form method="post" action="phpsample.php">
<p>お名前
<input type="text" name="name" required></p>
<p>性別</p>
<select name="gender" required>
<option></option>
<option value="男性">男性</option>
<option value="女性">女性</option>
</select>
<p><input type="submit" value="送信する"></p>
</form>
</div>
</body>
</html>