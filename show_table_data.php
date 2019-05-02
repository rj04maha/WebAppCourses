<?php
	
require('functions.php');

$table_name = $_GET['table_name'];

if ($table_name) 
	$out = show_table_admin($table_name);

else 
	$out = '<b>Usage format:</b> <pre>'.basename(__FILE__).'?table_name=</pre>';

make_basic_page("Show $table_name", $out);		
	
?>