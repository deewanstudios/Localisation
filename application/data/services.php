<?php

	$content = "This is my services page";

	// $moreContent= "SELECT * FROM subContent";
//
     // $data = $connection->query($moreContent);
//
     // $data->setFetchMode ( PDO::FETCH_ASSOC );
//
     // while ($row = $data->fetch() ){
         // $subContent[] = $row;
         // };
//
//
		 // $sql= "SELECT page_Title, content  FROM pages";
//
     // $data = $connection->query($sql);
//
     // $results = $data->fetchAll( PDO::FETCH_ASSOC );

	$subNav = "SELECT link, linkName, title FROM SERVICES ORDER BY id";
	$data = $connection->query($subNav);
	$outcome =$data->fetchAll(PDO::FETCH_ASSOC);


	$sql= "SELECT page_Title, content  FROM pages";

     $data = $connection->query($sql);

     $results = $data->fetchAll( PDO::FETCH_ASSOC );
?>