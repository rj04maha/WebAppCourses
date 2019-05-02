<?php
	
require('functions.php');

$table_name = 'rj04maha_users';

$sql = "INSERT INTO $table_name  (`uid`, `email`, `pwd`, `first`, `last`, `col`, `major`, `fyear`, `gyear`, `cred`, `bio`, `grad`) VALUES
(1, 'ebreimer@siena.edu', 'password', 'Eric', 'Breimer', 'Siena College', 'Computer ', 2015, 2019, 120, 'This is a the biography of Eric Breimer ', 'T'),
(2, 'dlim@siena.edu', 'password', 'Darren', 'Lim', 'Siena College', 'Computer Science', 2014, 2018, 120, 'This is the biography of Darren Lim.', 'F');";
	
run_query($sql);

$out = show_table($table_name);

make_basic_page("Table $table_name", $out);		
	
?>