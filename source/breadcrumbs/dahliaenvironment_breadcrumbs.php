<?php

class dahliaenvironment_breadcrumbs
{
	public $mysql_connection_handle = null;
	
	public $array_of_selected_trails = [];
	
	public $table_selected_by_name = "";
	
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
	
	function walk_the_operation()
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
		$experience_results = $this->walk_the_operation();
		return $experience_results;
	}
}

?>
