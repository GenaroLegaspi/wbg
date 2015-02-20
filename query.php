<?php
	include 'dbconnect.php';
	
	session start;
	
			$acctid = 1000000001;
			$accttype = "Admin";
			$name = "DENR_Admin";
			$email = "denr@yahoo.com";
			$password = "administrator123";
			$password2 = "administrator123";
			$company = "DENR";
			$address = "Region 7";
			$status = 1;
			
			$com = "INSERT INTO accts(acctid,accttype,name,email,password,password2,company,address,status)VALUES('$acctid','$accttype','$name','$email','$password','$password2','$company','$address','$status')"
			mysql_query($com);
			echo "<script> alert ('You are now registered!!!')</script>"

?>