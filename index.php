<?php

echo "it works!";

$dbh = new PDO('mysql:host=xbmysql;dbname=users',
                'root', 'pass');
$sth = $dbh -> query("SELECT * FROM users");
$users = $sth -> fetchAll(PDO::FETCH_ASSOC);

print_r($users);

?>
