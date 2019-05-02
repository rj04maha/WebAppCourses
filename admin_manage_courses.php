<?php

require('functions.php');

/* -----------------------------------------------------------------------
	 Returns an HTML table for managing courses
----------------------------------------------------------------------- */	
function show_admin_table($table_name) {
	
	session_start();						// Restore session variables
	if ($_SESSION['admin']) {			// Only process if a user is logged in
		

		// Get the course id, subject, number and user id
		$rows = run_query("SELECT uid, cid, sub, num, uid FROM $table_name");
		
		if ($rows) { // Only process if there are rows
			
			// Hard-code the table header row (ths)
			$ths .= '
				<tr>
					<th>Admin Controls</th>
                    <th>User ID</th>
					<th>Course ID</th>
					<th>Subject</th>
					<th>Number</th>
				</tr>';
			
			// Loop for each row and use the cid to create custom URL links for editing and deleting courses	
			while($row = $rows->fetch_assoc()) {
				$tds .= '
					<tr>
						<td>
							<a class="btn btn-sm btn-warning" href="update_course.php?cid='.$row['cid'].'">Edit</a>
							<a class="btn btn-sm btn-danger delete" id="'.$row['cid'].'">X</a>
						</td>
						<td>'.$row['uid'].'</td>
                        <td>'.$row['cid'].'</td>
						<td>'.$row['sub'].'</td>
						<td>'.$row['num'].'</td>
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

$table_name = 'rj04maha_courses';	 // Be sure to change this to your userid, e.g., f01last_courses
$page_name = 'Manage '.$table_name;

$content = '<h2>'.$page_name.'</h2>';
$content .= show_admin_table($table_name);

$page_name = 'Manage courses';

make_basic_page($page_name, $content);

?>