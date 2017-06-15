<!DOCTYPE html>
<html>
<head>
	<title>Countries</title>
</head>
<body>
	<?php 
	require('../database.api.php');

	$db = new Database('world');

    foreach($db->getInstance()->query('SELECT * from CITY') as $row) {
        print_r('<p>'.$row['Name'].'</p>');
    }

 ?>
</body>
</html>
