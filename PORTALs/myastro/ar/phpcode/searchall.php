<?php  include_once 'Classes/searchall.php'; ?>
<?php 
    if(isset($_POST['searchvalue'])&& !empty($_POST['searchvalue'])){
		$searchvalue=$_POST['searchvalue'];
		$searchall=new Searchall();
		$result=$searchall->getBlock($searchvalue);
		if(isset($result)){
			echo json_encode($result);
		}
	}
	else{
		echo 'error';
	}
?>