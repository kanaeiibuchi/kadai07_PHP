<html>
<head>
<meta charset="utf-8"> 
<!-- //utf-8文字化け -->
<title>もぐちゃれ登録</title>
</head>
<body>
<?php
 include("inc/head.html");
?>
<form action="write.php" method="post">
	<label for="name">お名前: </label>	<br>
	<input type="text" name="name">
	<br>
	<label for="mail">Email: </label>	<br>
	<input type="text" name="mail">
	<br>
	<label for="memo">自己紹介:</label>	<br>
	<textarea name="memo" cols="30" rows="10"></textarea>
	<br><br>
	<button type="submit">登録</button>	
</form>
<button onclick="location.href='./read.php'">参照</button>

</body>
</html>