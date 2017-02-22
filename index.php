<?php
include_once 'header.php';
include_once 'config/database.php';
include_once 'objects/product.php';
include_once 'objects/category.php';

// get database connection
$database = new Database();
$db = $database->getConnection();
?>

// main content of web page must be here!
<?php
include_once 'footer.php';
?>
