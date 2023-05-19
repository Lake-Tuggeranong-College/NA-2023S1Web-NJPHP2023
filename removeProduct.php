<?php include "template.php";
/**  @var $conn */
?>
<title>Remove Product</title>
<?php
// Check to see if User is Administrator (level 1)
// If they are, allow functionality, otherwise redirect them back to the front page.
if ($_SESSION['AccessLevel'] == 1) {
    if (isset($_GET["prodCode"])) {
        // delete product from database
        $productToDelete = $_GET["prodCode"];
        $query = "DELETE FROM product WHERE Code='$productToDelete'";
        $sqlstmt = $conn->prepare($query);
        $sqlstmt->execute();
        echo "<p>Product " . $productToDelete . " has been deleted from the database";
    } else {
        echo "No product code found.";
    }



} else {
    header("location:index.php");
}
?>
