<?php include 'connection.php';
$id = $_GET['id'];
$query = "DELETE FROM details WHERE id ='$id' ";

$sql = mysqli_query($con, $query);
if ($sql) {
    ?>
    <script>
        alert("Data Deleted Successfully");
        window.open("http://localhost/PHPCRUD/view.php", "_self");
    </script>
    <?php
} else {
    ?>
    <script>alert("Error")</script>
    <?php
}

?>