<?php
$host="localhost";
		$uname="maven_cman";
		$pas="Kith1992";
		$db_name="maven_cman";
		$tbl_name="admin";
		
		@mysql_connect("$host","$uname","$pas") or die ("cannot connect");
		mysql_select_db("$db_name") or die ("cannot select db");
		?>