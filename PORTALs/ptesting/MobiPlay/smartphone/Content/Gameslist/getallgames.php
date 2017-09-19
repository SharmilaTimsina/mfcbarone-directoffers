<?php 
	//connect ot the database 
	$servername = "35.177.38.73";
	$username = "contentuser";
	$password = "root";
	$dbname = "docontent";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// sql to create tabled
	$sql = "SELECT * FROM Games s WHERE ( SELECT COUNT(*) FROM Games f WHERE f.type_of_content = s.type_of_content AND f.content >= s.content AND additional_require=0 AND type_of_content NOT IN('arcade','rpg','puzzle') ) <= 2 AND additional_require=0 AND type_of_content NOT IN('arcade','rpg','puzzle') ORDER BY type_of_content ASC";
	$result = mysqli_query($conn, $sql);
	$data=Array();
	if (mysqli_num_rows($result) > 0) {
		$i=0;
		$j=0;
		$k=0;
		$store_cat='';
		$data=array();
		$type_of_content=Array();
	// output data of each row
		while($row = mysqli_fetch_assoc($result)) {	
		$data[]=$row;
		$type_of_content[]=$row['type_of_content'];
		   //$data[]=$row;
		}
		$t=Array();
		$type_of_content=array_unique($type_of_content);
		foreach($type_of_content as $value){
			foreach($data as $value1){
				if($value==$value1['type_of_content']){
					$t[$value][]=$value1;
				}
			}
	    }
		$t=array_values($t);	
		echo json_encode($t);
		} else {
			echo "error";
		}
		
	mysqli_close($conn);

?>