<?php
	
require('functions.php');

$table_name = "rj04maha_users";

$sql = "CREATE TABLE $table_name (
	uid   INT(10)     NOT NULL AUTO_INCREMENT,
	email VARCHAR(24) NOT NULL COMMENT 'Email' UNIQUE,
	pwd   VARCHAR(64) NOT NULL COMMENT 'Password', 
	first VARCHAR(24) NOT NULL COMMENT 'First Name', 
	last  VARCHAR(24) NOT NULL COMMENT 'Last Name', 
	col   VARCHAR(24) NULL     COMMENT 'College or University',
	major VARCHAR(24) NULL     COMMENT 'Major',
	fyear INT(4)      NULL     COMMENT 'First year of college',
	gyear INT(4)      NULL     COMMENT 'Graduation year of college',
	cred  INT(3)      NULL     COMMENT 'Number of credits', 
	bio   TEXT        NULL     COMMENT 'Biography', 
	grad  VARCHAR(1)  NULL     COMMENT 'Graduated', 
	PRIMARY KEY (uid)
)";
	
create_table($sql, $table_name);	
	
?>