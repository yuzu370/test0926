<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>書籍一覧</title>
</head>
<body>
 <h1>書籍の一覧</h1>
 <a href="form.html">新規登録</a>

<?php
//$user = "●●●";
//$pass = "●●●";
$dbh = new PDO('mysql:host=localhost;dbname=gs_f01_db08;charset=utf8', 'root', '');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM gs_bm_table";
$stmt = $dbh->query($sql);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<table>\n";
echo "<tr>\n";
echo "<th>書籍名</th><th>書籍URL</th><th>書籍コメント</th><th>登録日時</th>\n";
echo "</tr>\n";
foreach ($result as $row) {
    echo "<tr>\n";
    echo "<td>" . $row['book_name'] . "</td>\n";
    echo "<td>" . $row['book_url'] . "</td>\n";
    echo "<td>" . $row['book_coment'] . "</td>\n";
    echo "<td>" . $row['book_date'] . "</td>\n";
    echo "<td>\n";
    echo "|<a href=delete.php?id=" . htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8') . ">削除</a>\n";
    echo "</td>\n";
    echo "</tr>\n";
}
echo "</table>\n";
$dbh = null;
?>
    
</body>
</html>
