<h1>Hello REORG TEAM!</h1>
<h4>Attempting MySQL connection from php service 3...</h4>
<?php

$MYSQL_USER= getenv('MYSQL_USER');
$MYSQL_PASSWORD=getenv('MYSQL_PASSWORD');

$db = new PDO('mysql:host=mysql;port=3306;dbname=test_db', $MYSQL_USER, $MYSQL_PASSWORD);

if ($db->connect_error) {
	    die("Connection failed: " . $db->connect_error);
}
echo "Connected to MySQL successfully!";
?>

