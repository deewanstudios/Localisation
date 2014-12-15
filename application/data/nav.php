<?php 
	
	$query = "SELECT page_Title FROM pages order by id" ;		
			
	$data = $connection->query($query);
	
	$data->setFetchMode ( PDO::FETCH_ASSOC );
	
	while ($row = $data->fetch() ){
		$pageName[] = $row;
		}
	
	
	$statement = "SELECT menu_name FROM pages order by id" ;
			
			
	$data = $connection->query($statement);
	
	$data->setFetchMode ( PDO::FETCH_ASSOC );
	
	while ($row = $data->fetch() ){
		$menuName[] = $row;
		}
	
	
	
	
?>


