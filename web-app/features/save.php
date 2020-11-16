<?php
include '../config.php';

if(count($_POST)>0){
	if($_POST['type']==1){
		$name=$_POST['name'];
		$abstract=$_POST['abstract'];
		$address=$_POST['address'];
    $city=$_POST['city'];
    $district=$_POST['district'];
		$type=$_POST['_type'];

		$sql = "INSERT INTO `organizations` (`org_name`, `org_abstract`,`org_address`,`org_city`, `org_district`, `org_type`) 
		VALUES ('$name','$abstract','$address','$city', '$district', '$type')";
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
		$abstract=$_POST['abstract'];
		$address=$_POST['address'];
    $city=$_POST['city'];
    $district=$_POST['district'];
		$type=$_POST['_type'];
		$sql = "UPDATE `organizations` SET `org_name`='$name',`org_abstract`='$abstract',`org_address`='$address',`org_city`='$city', `org_district`='$district',`org_type`='$type' WHERE id=$id";
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
		$sql = "DELETE FROM `organizations` WHERE org_id=$id ";
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
		$sql = "DELETE FROM organizations WHERE org_id in ($id)";
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