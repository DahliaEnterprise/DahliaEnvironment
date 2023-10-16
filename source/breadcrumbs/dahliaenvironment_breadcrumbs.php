<?php

class dahliaenvironment_breadcrumbs
{
	public $mysql_connection_handle = null;
	
	public $array_of_selected_trails = [];
	
	function hike($username, $password)
	{
		$mysql_connection_handle = new PDO("mysql:host=localhost;dbname=newssite;", $username, $password);
	}
	
	
	function select_trails($set_array_of_trails_to_select)
	{
	echo "test";
		//Reset
		$array_of_selected_trails = [];
		
		//Define
		$array_of_selected_trails = $set_array_of_trails_to_select;
		print_r($array_of_selected_trails);
	}
}

?>
