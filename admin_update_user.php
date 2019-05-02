<?php
	
require('functions.php');

session_start();

$table_name = 'rj04maha_users';
$link_to = "manage_users.php";

$uid = $_GET['uid'];

$result = run_query("SELECT * FROM $table_name WHERE uid='$uid'");
$row = $result->fetch_assoc();


$content = '
            <form action="admin_update_user.php?uid='.$uid.'" method="post">
			
			  <div class="form-group">
			    <label for="email">Email</label>
				<input type="text" class="form-control" id="email" name="email" size="24" value="'.$row['email'].'" style="width: auto;">
			  </div>		
			
			  <div class="form-group">
			    <label for="pwd">Password</label>
				<input type="password" class="form-control" id="pwd" name="pwd" size="64" value="'.$row['pwd'].'" style="width: auto;">
			  </div>		
			
			  <div class="form-group">
			    <label for="first">First Name</label>
				<input type="text" class="form-control" id="first" name="first" size="24" value="'.$row['first'].'" style="width: auto;">
			  </div>		
			
			  <div class="form-group">
			    <label for="last">Last Name</label>
				<input type="text" class="form-control" id="last" name="last" size="24" value="'.$row['last'].'" style="width: auto;">
			  </div>		
			
			  <div class="form-group">
			    <label for="col">College or University</label>
				<input type="text" class="form-control" id="col" name="col" size="24" value="'.$row['col'].'" style="width: auto;">
			  </div>		
			
			  <div class="form-group">
			    <label for="major">Major</label>
				<input type="text" class="form-control" id="major" name="major" size="24" value="'.$row['major'].'" style="width: auto;">
			  </div>		
			
			  <div class="form-group">
			    <label for="fyear">First year of college</label>
			    <select class="form-control" id="fyear" name="fyear">
					<option value="'.$row['fyear'].'" selected>'.$row['fyear'].'</option>
					<option value="2022" >2022</option>
					<option value="2021" >2021</option>
					<option value="2020" >2020</option>
					<option value="2019" >2019</option>
					<option value="2018" >2018</option>
					<option value="2017" >2017</option>
					<option value="2016" >2016</option>
					<option value="2015" >2015</option>
					<option value="2014" >2014</option>
					<option value="2013" >2013</option>
					<option value="2012" >2012</option>
					<option value="2011" >2011</option>
					<option value="2010" >2010</option>
					<option value="2009" >2009</option>
					<option value="2008" >2008</option>
					<option value="2007" >2007</option>
					<option value="2006" >2006</option>
					<option value="2005" >2005</option>
					<option value="2004" >2004</option>
					<option value="2003" >2003</option>
					<option value="2002" >2002</option>
					<option value="2001" >2001</option>
					<option value="2000" >2000</option>
					<option value="1999" >1999</option>
					<option value="1998" >1998</option>
					<option value="1997" >1997</option>
					<option value="1996" >1996</option>
					<option value="1995" >1995</option>
					<option value="1994" >1994</option>
					<option value="1993" >1993</option>
					<option value="1992" >1992</option>
					<option value="1991" >1991</option>
					<option value="1990" >1990</option>
					<option value="1989" >1989</option>
					<option value="1988" >1988</option>
					<option value="1987" >1987</option>
					<option value="1986" >1986</option>
					<option value="1985" >1985</option>
					<option value="1984" >1984</option>
					<option value="1983" >1983</option>
					<option value="1982" >1982</option>
					<option value="1981" >1981</option>
					<option value="1980" >1980</option>
					<option value="1979" >1979</option>
					<option value="1978" >1978</option>
					<option value="1977" >1977</option>
					<option value="1976" >1976</option>
					<option value="1975" >1975</option>
					<option value="1974" >1974</option>
					<option value="1973" >1973</option>
					<option value="1972" >1972</option>
					<option value="1971" >1971</option>
					<option value="1970" >1970</option>
			    </select>
			  </div>		
			
			  <div class="form-group">
			    <label for="gyear">Graduation year of college</label>
			    <select class="form-control" id="gyear" name="gyear">
					<option value="'.$row['gyear'].'" selected>'.$row['gyear'].'</option>
					<option value="2022" >2022</option>
					<option value="2021" >2021</option>
					<option value="2020" >2020</option>
					<option value="2019" >2019</option>
					<option value="2018" >2018</option>
					<option value="2017" >2017</option>
					<option value="2016" >2016</option>
					<option value="2015" >2015</option>
					<option value="2014" >2014</option>
					<option value="2013" >2013</option>
					<option value="2012" >2012</option>
					<option value="2011" >2011</option>
					<option value="2010" >2010</option>
					<option value="2009" >2009</option>
					<option value="2008" >2008</option>
					<option value="2007" >2007</option>
					<option value="2006" >2006</option>
					<option value="2005" >2005</option>
					<option value="2004" >2004</option>
					<option value="2003" >2003</option>
					<option value="2002" >2002</option>
					<option value="2001" >2001</option>
					<option value="2000" >2000</option>
					<option value="1999" >1999</option>
					<option value="1998" >1998</option>
					<option value="1997" >1997</option>
					<option value="1996" >1996</option>
					<option value="1995" >1995</option>
					<option value="1994" >1994</option>
					<option value="1993" >1993</option>
					<option value="1992" >1992</option>
					<option value="1991" >1991</option>
					<option value="1990" >1990</option>
					<option value="1989" >1989</option>
					<option value="1988" >1988</option>
					<option value="1987" >1987</option>
					<option value="1986" >1986</option>
					<option value="1985" >1985</option>
					<option value="1984" >1984</option>
					<option value="1983" >1983</option>
					<option value="1982" >1982</option>
					<option value="1981" >1981</option>
					<option value="1980" >1980</option>
					<option value="1979" >1979</option>
					<option value="1978" >1978</option>
					<option value="1977" >1977</option>
					<option value="1976" >1976</option>
					<option value="1975" >1975</option>
					<option value="1974" >1974</option>
					<option value="1973" >1973</option>
					<option value="1972" >1972</option>
					<option value="1971" >1971</option>
					<option value="1970" >1970</option>
			    </select>
			  </div>		
			
			  <div class="form-group">
			    <label for="cred">Number of credits</label>
				<input type="number" class="form-control" id="cred" name="cred" size="3" value="'.$row['cred'].'" style="width: auto;">
			  </div>		
			
			  <div class="form-group">
			    <label for="bio">Biography</label>
				<textarea class="form-control" id="bio" name="bio" rows="3">'.$row['bio'].'</textarea>
			  </div>		
			
			  <div class="form-group">
			    <label for="grad">Graduated</label>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="grad" id="grad-true" value="T" >
				  <label class="form-check-label" for="grad-true">
				    True
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="grad" id="grad-false" value="F" checked>
				  <label class="form-check-label" for="grad-false">
				    False
				  </label>
				</div>	
			  </div>		
			
			<input type="submit" class="btn btn-primary">
		</form>';

    $valid = false;
    
    //$fields = '';
    //$values = '';
    
    foreach ($_POST as $field=>$value){
        if ($value != ''){
            $valid = true;
            //$fields .= $field.',';
            //$values .= "'$value',";
			$new_values .= "$field = '$value',";
        
        }
        else {
	        $valid = false;
	        break;
        }
     }
     //$fields = rtrim($fields,",");
     //$values = rtrim($values,",");
        
	$new_values = rtrim($new_values,",");
        
    if ($valid){
        $db = db_connect();
        $sql = "UPDATE $table_name SET $new_values WHERE uid='$uid'";
        $output = $db->query($sql);
        $db->close();
        //$content = $sql;
		
		$content = '<p><a class="btn btn-primary" href="'.$link_to.'">Go back to manage users</a></p>';
		
    }
        
	// fix me later - redirect to login page 
    make_basic_page('Edit', $content);
    
?>



