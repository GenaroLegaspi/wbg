<?php
	$con = mysql_connect("localhost","root","");
	mysql_select_db("wbg","$con");
	or die("Unable to connect to MySQL");
    echo "Connected<br>";
?>