<?php
include '../config.php';

if(count($_POST)>0){
	if($_POST['type']==1){
		$name=$_POST['name'];

		$sql = "INSERT INTO `features` (`feature_name`) VALUES ('$name')";
		if (mysqli_query($link, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($link);
		}
		mysqli_close($link);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
    $id=$_POST['id'];
		$name=$_POST['name'];
		$sql = "UPDATE `features` SET `feature_name`='$name' WHERE feature_id=$id";
		if (mysqli_query($link, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($link);
		}
		mysqli_close($link);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `features` WHERE feature_id=$id ";
		if (mysqli_query($link, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($link);
		}
		mysqli_close($link);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM features WHERE feature_id in ($id)";
		if (mysqli_query($link, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($link);
		}
		mysqli_close($link);
	}
}

?>