<?php

class dahliaenvironment_breadcrumbs
{
	public $mysql_connection_handle = null;
	
		//Select trails operations related
		public $selected_trails_array_of_selected_trails = [];
		
		public $selected_trails_table_selected_by_name = "";
		
		//New trail operations related
		//TODO ?
	
	function hike($database_name, $username, $password)
	{
		$this->mysql_connection_handle = new PDO("mysql:host=localhost;dbname=".$database_name.";", $username, $password);
	}
	
	
	function select_trails($set_array_of_trails_to_select)
	{
		//Reset
		$this->array_of_selected_trails = [];
		
		//Define
		$this->array_of_selected_trails = $set_array_of_trails_to_select;
		
	}
	
	function screened_area($set_from_table)
	{
		$this->table_selected_by_name = $set_from_table;
	}
	
	function walk_the_select_trails_operation()
	{
		$output = [];
		
		
		if(sizeof($this->array_of_selected_trails) > 0)
		{
			if(strlen($this->table_selected_by_name) > 0)
			{
				//Create query
				$query_as_string = "SELECT ";
				
					//Append columns
					$append_to_columns_string = "";
					$index = 0;
					$total_indices = sizeof($this->array_of_selected_trails);
					while($index < $total_indices)
					{
						if($index > 0)
						{
							$append_to_columns_string .= ",";
							$append_to_columns_string .= $this->array_of_selected_trails[$index];
							
						}else if($index == 0)
						{
							$append_to_columns_string = $this->array_of_selected_trails[0];
						}
						
						$index = $index + 1;
					}
					
					$query_as_string .= $append_to_columns_string;
					
					//FROM text
					$query_as_string .= " FROM ";
					
					//
					$query_as_string .= $this->table_selected_by_name;
					
				//run query
				$output["stmt"] = $this->mysql_connection_handle->query($query_as_string);
			}
		}
		
		return $output;
	}
	
	function inaugurate_hike_according_to_plan_using_select_trails_only($set_array_of_trails_to_select, $set_from_table)
	{
		$this->select_trails(["id"]);
		$this->screened_area("test");
		$experience_results = $this->walk_the_select_trails_operation();
		return $experience_results;
	}
	
	function create_new_trail($screened_area_name, $list_of_trails_as_array_values)
	{
		//create "list of trails"
		$list_of_trails = "";
		$list_of_trails_index = 0;
		while($list_of_trails_index < sizeof($list_of_trails_as_array_values))
		{
			if($list_of_trails_index == 0)
			{
				$list_of_trails = "".$list_of_trails_as_array_values[0];
			}else if($list_of_trails_index > 0)
			{
				$list_of_trails .= ",".$list_of_trails_as_array_values[$list_of_trails_index];
			}
			
			$list_of_trails_index = $list_of_trails_index + 1;
		}
		
		//create "list of values"
		$list_of_values = "";
		$list_of_values_index = 0;
		while($list_of_values_index < sizeof($list_of_trails_as_array_values))
		{
			if($list_of_values_index == 0)
			{
				$list_of_values = "?";
			}else if($list_of_values_index > 0)
			{
				$list_of_values .= ",?";
			}
			
			$list_of_values_index = $list_of_values_index + 1;
		}
		
		$query_as_string = "INSERT INTO ".$screened_area_name." (".$list_of_trails.") VALUES(".$list_of_values.");";
		echo $query_as_string;
		//$stmt = $this->mysql_connection_handle->prepare($query_as_string);
		
	}
}

?>
