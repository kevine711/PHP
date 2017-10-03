<?php
    //Created by Kevin Ersoy 2017
	$db = mysql_connect('localhost', 'database_username', 'password_for_user') or die('Could not connect: ' . mysql_error());
        mysql_select_db('database_name') or die('Could not select database');
		//change above database name, username, and password for your sql database
		
    
      //Here's our query for a code, change table name per your database
      $query = "SELECT * FROM `table_name_in_database` LIMIT 1";
      $result = mysql_query($query) or die('Query failed: ' . mysql_error());
     
      $num_results = mysql_num_rows($result);    
         
	  if ($num_results < 1)
	  {
		echo "No More Codes, Sorry";
	  }
	  else 
	  {
		$row = mysql_fetch_array($result);
		//change below for the proper column name
		$code = $row['column_name_in_table'];
		echo $code . "<br>";
		echo "<a href=https://play.google.com/redeem?code=$code>Play Store Link w/code</a>";
		//change below for proper table name and column name
		$query = "DELETE FROM `table_name_in_database` WHERE `column_name_in_table` = '$code'";
		$result = mysql_query($query) or die('Query failed: ' . mysql_error());
	  }
?>