<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "dictionary";
$link = mysql_connect($host,$username,$password);
$db_selected = mysql_select_db($dbname,$link);
$result = mysql_query('select * from word');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>辞書</title>
    </head>
    <body>
            <?php
            if(!$lnk){
                die('接続失敗です。'.mysql_error());
            }
            if(!$db_selected){
                die('データベース選択失敗です。'.mysql_error());
            }
            if(!$result){
                die('クエリーが失敗しました。'.mysql_error());
            }
            while ($row = mysql_fetch_assoc($result)){
                print('<p>');
                print($row['japanese']);
                print('</p>');
            }
            ?>
    </body>
</html>