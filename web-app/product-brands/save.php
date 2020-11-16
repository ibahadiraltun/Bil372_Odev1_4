<?php
include '../config.php';

if(count($_POST)>0){
	if($_POST['type']==1){
		$barcode=$_POST['barcode'];
		$syscode=$_POST['syscode'];
		$name=$_POST['name'];
		$manufacturerId=$_POST['manufacturerId'];

		$sql = "INSERT INTO `product_brands` (`brand_barcode`,`m_syscode`,`brand_name`,`manufacturer_id`)
		  VALUES ('$barcode','$syscode','$name','$manufacturerId')";
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
		$barcode=$_POST['barcode'];
		$syscode=$_POST['syscode'];
		$name=$_POST['name'];
		$manufacturerId=$_POST['manufacturerId'];
   
		$sql = "UPDATE `product_brands` SET `brand_barcode`='$barcode',`m_syscode`='$syscode',`brand_name`='$name',`manufacturer_id`='$manufacturerId' WHERE (brand_barcode=$barcode AND m_syscode=$syscode)";
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
    $barcode=$_POST['id'];
    $syscode=$_POST['syscode'];
		$sql = "DELETE FROM `product_brands` WHERE (brand_barcode=$barcode AND m_syscode=$syscode)";
		if (mysqli_query($link, $sql)) {
			echo $barcode;
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
		$sql = "DELETE FROM product_brands WHERE (brand_barcode, m_syscode) in ($id)";
		if (mysqli_query($link, $sql)) {
			echo $barcode;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($link);
		}
		mysqli_close($link);
	}
}

?>