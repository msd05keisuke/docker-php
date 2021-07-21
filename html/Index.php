<?php
try {
    $db = sprintf('mysql:host=%s:3306;dbname=%s',  'mysql', 'mydb');
    $dbh = new PDO($db, 'hoge', 'password');
    foreach($dbh->query('select * from users') as $row) {
        echo $row['name'] . '<br>';
    }
    $dbh = null;
} catch (PDOException $e) {
    echo $e;
    die();
}
$dbh = null;