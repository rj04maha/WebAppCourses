<?php

require('functions.php');

/* -----------------------------------------------------------------------
	 Returns an HTML table for managing users
----------------------------------------------------------------------- */	
function show_admin_table($table_name) {
	session_start();						
	if ($_SESSION['admin']) {			
        
        
		// Get the course id, subject, number and user id
		$rows = run_query("SELECT uid, first, last, major, col FROM rj04maha_users");
		
		if ($rows) { // Only process if there are rows
			
			// Hard-code the table header row (ths)
			$ths .= '
				<tr>
					<th>Admin Controls</th>
					<th>User ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Major</th>
					<th>College</th>
				</tr>';
            
            
			
			// Loop for each row and use the cid to create custom URL links for editing and deleting courses	
			while($row = $rows->fetch_assoc()) {
				$tds .= '
					<tr>
						<td>
							<a class="btn btn-sm btn-warning" href="admin_update_user.php?uid='.$row['uid'].'">Edit</a>
							<a class="btn btn-sm btn-danger delete_user" id="'.$row['uid'].'">X</a>
						</td>
						<td>'.$row['uid'].'</td>
						<td>'.$row['first'].'</td>
						<td>'.$row['last'].'</td>
						<td>'.$row['major'].'</td>
						<td>'.$row['col'].'</td>
					</tr>';
			}
			
			// Slice the header row and table data into a Bootstrap table
			$table =  '
				<table class="table">
				 <thead>
				 	'.$ths.'
				 </thead>
				 <tbody>
				 	'.$tds.'
				 </tbody>
				</table>';		
		
			// Return the table
			return $table;			
		}
		return 'No rows';
	}
	return 'Must be logged in';
}	

$table_name = 'rj04maha_users';	 // Be sure to change this to your userid, e.g., f01last_courses
$page_name = 'Manage '.$table_name;

$content = '<h2>'.$page_name.'</h2>';
$content .= show_admin_table($table_name);

$page_name = 'Manage users';

make_basic_page($page_name, $content);

?>