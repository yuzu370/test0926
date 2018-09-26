<?php
//$user = "●●●";
//$pass = "●●●";
$book_name = $_POST['book_name'];
$book_url = $_POST['book_url'];
$book_coment = $_POST['book_coment'];
$book_date = $_POST['book_date'];

$dbh = new PDO('mysql:host=localhost;dbname=gs_f01_db08;charset=utf8','root', '');
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO gs_bm_table (book_name, book_url, book_coment, book_date) VALUES (?, ?, ?, ?)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(1, $book_name, PDO::PARAM_STR);
    $stmt->bindValue(2, $book_url, PDO::PARAM_STR);
    $stmt->bindValue(3, $book_coment, PDO::PARAM_STR);
    $stmt->bindValue(4, $book_date, PDO::PARAM_STR);
    $stmt->execute();
    $dbh = null;
    echo "書籍の登録が完了しました。<br>";
    echo "<a href='index.php'>トップページへ戻る</a>";

    ?>