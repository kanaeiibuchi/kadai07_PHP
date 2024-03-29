<?php
$name=$_POST["name"];
$mail=$_POST["mail"];
$memo=$_POST["memo"];
$c   = ",";
//文字作成
$date = date("Y-m-d H:i:s");
$str =$date.$c.$name.$c.$mail.$c.$memo;

//File書き込み
$file = fopen("./data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);

//入力画面に戻す
header("Location: index.php");
exit;

?>

<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>

<ul>
<li><a href="input.php">戻る</a></li>
</ul>
</body>
</html>