<?php
include '../config.php';

if(count($_POST)>0){
	if($_POST['type']==1){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $country=$_POST['country'];

		$sql = "INSERT INTO `manufacturers` (`manufacturer_name`, `manufacturer_address`, `city`, `country`) VALUES ('$name', '$address', '$city', '$country')";
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
    $address=$_POST['address'];
    $city=$_POST['city'];
    $country=$_POST['country'];
		$sql = "UPDATE `manufacturers` SET `manufacturer_name`='$name',`manufacturer_address`='$address',`city`='$city',`country`='$country' WHERE manufacturer_id=$id";
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
		$sql = "DELETE FROM `manufacturers` WHERE manufacturer_id=$id ";
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
		$sql = "DELETE FROM manufacturers WHERE manufacturer_id in ($id)";
		if (mysqli_query($link, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($link);
	}
}

?>