<?php
$DB_NAME = getenv("DB_NAME");
$DB_USER = getenv("DB_USER");
$DB_PASSWORD = getenv("DB_PASSWORD");
$DB_SERVICE = getenv("DB_SERVICE");

$DB_HOST = strtoupper($DB_SERVICE) . "_SERVICE_HOST";

echo $DB_HOST;
echo $DB_USER;
echo $DB_PASSWORD;

$link = mysql_connect($DB_HOST, $DB_USER, $DB_PASSWORD);
if (!$link) {
        die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);

?>
