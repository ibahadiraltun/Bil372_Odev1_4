<?php
include '../config.php';

if(count($_POST)>0){
	if($_POST['type']==1){
    $code=$_POST['code'];
    $name=$_POST['name'];
    $shortname=$_POST['shortname'];
		$abstract=$_POST['abstract'];
		$category=$_POST['category'];
    $active=$_POST['active'];
		$sql = "INSERT INTO `product` (`m_code`, `m_name`,`m_shortname`,`m_abstract`, `m_category`, `is_active`) 
		VALUES ('$code','$name','$shortname','$abstract','$category','$active')";
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
    $code=$_POST['code'];
    $name=$_POST['name'];
    $shortname=$_POST['shortname'];
		$abstract=$_POST['abstract'];
		$category=$_POST['category'];
    $active=$_POST['active'];
		$sql = "UPDATE `product` SET `m_code`='$code',`m_name`='$name',`m_shortname`='$shortname',`m_abstract`='$abstract',`m_category`='$category',`is_active`='$active' WHERE m_syscode=$id";
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
		$sql = "DELETE FROM `product` WHERE m_syscode=$id";
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
		$sql = "DELETE FROM product WHERE m_syscode in ($id)";
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