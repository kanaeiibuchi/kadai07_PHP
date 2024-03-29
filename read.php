<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<title>登録データ表示</title>
</head>
<body>

<h2>登録データ一覧</h2>
<button onclick="location.href='./index.php'">戻る</button>

<table border="1">
<tr>
<th>日時</th>
<th>お名前</th>
<th>Email</th>
<th>自己紹介</th>
</tr>

<?php
// ファイルパス
$file_path = "./data.txt";

// ファイルを読み込む
$file = fopen($file_path, "r");

// ファイルが開けたかどうかを確認
if ($file) {
    // データを1行ずつ読み込んで表形式で表示する
    while (($line = fgets($file)) !== false) {
        // 各行のデータをカンマで分割
        $data = explode(",", $line);
        // テーブルの行を開始
        echo "<tr>";
        // 各データを表のセルに表示
        echo "<td>" . $data[0] . "</td>";
        echo "<td>" . $data[1] . "</td>";
        echo "<td>" . $data[2] . "</td>";
        echo "<td>" . $data[3] . "</td>";
        // テーブルの行を終了
        echo "</tr>";
    }

    // ファイルを閉じる
    fclose($file);
} else {
    // ファイルが開けなかった場合の処理
    echo "ファイルを開けませんでした。";
}
?>

</table>


</body>
</html>
