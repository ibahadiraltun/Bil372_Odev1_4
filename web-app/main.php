<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="logout.php" class="btn btn-danger">Logout</a>
        <div class="page-header">
        <h2> Sections </h2>
        </div>
        <a href="organizations/organization-list.php" class="btn btn-primary">Organizations</a>
        <a href="products/product-list.php" class="btn btn-primary">Products</a>
        <a href="manufacturers/manufacturers-list.php" class="btn btn-primary">Manufacturers</a>
        <a href="features/features-list.php" class="btn btn-primary">Features</a>
        <a href="product-brands/product-brands-list.php" class="btn btn-primary">Product Brands</a>
        <div class="page-header">
        <h2> Team </h2>
        <div> Bahadir Altun </div>
        <div> Rabia Yunusoglu </div>
        <div> Furkan Dolasik </div>
        </div>
    </p>
</body>
</html>
