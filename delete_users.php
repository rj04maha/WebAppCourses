<?php

require('functions.php');

$table_name = 'rj04maha_users';
$uid = $_GET['uid'];
$sql = "DELETE FROM $table_name WHERE uid='$uid'";
run_query($sql);
echo $sql;



?>