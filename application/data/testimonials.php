<?php

	$content = "This is my service page";

	$query = "SELECT * FROM services";
			if(isset($_GET['link'])) {
				$link = $_GET['link'];
					$query = "SELECT * FROM SERVICES WHERE link = '$link'";

			}

	$data = $connection->query($query);
	$servicesData = $data->fetchAll ( PDO::FETCH_ASSOC );


	$subNav = "SELECT link, linkName, title FROM SERVICES ORDER BY id";
	$data = $connection->query($subNav);
	$outcome =$data->fetchAll(PDO::FETCH_ASSOC);

	$list = "SELECT "
?>