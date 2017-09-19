<?php 

//get the search value from ajax call using the post method
    if(isset($_POST['searchvalue'])&& !empty($_POST['searchvalue'])){
		$searchvalue=$_POST['searchvalue'];
		//$searchvalue='arcade and broadgame';//there can be three cases
		$searchvalue=str_replace(' ', ',', $searchvalue);
		$string='';
		$str=explode(',',$searchvalue);
		foreach($str as $value){
			$string.=" keywords LIKE '%".$value."%' OR ";	
		}
		$string=preg_replace('/\W\w+\s*(\W*)$/', '$1', $string);
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
        $sql = "SELECT content,images,type_of_content,link FROM Games WHERE additional_require=0 ".(!empty($string)? 'AND'.$string :'');
        $result = mysqli_query($conn, $sql);
		$data=Array();
		if (mysqli_num_rows($result) > 0) {
		// output data of each row
			while($row = mysqli_fetch_assoc($result)) {		
			   $data[]=$row;
			}
			echo json_encode($data);
			} else {
				echo "error";
			}
			
		mysqli_close($conn);
	}
?>