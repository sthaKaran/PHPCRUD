<?php
include "connection.php";
$id = $_GET['id'];
$select = "Select * from details where id = '$id'";
$sql = mysqli_query($con, $select);
$row = mysqli_fetch_array($sql);
?>
<link rel="stylesheet" href="style.css">
<form action="" method="post" id="form">
    <div class="form-control">
        <label for="name" id="label-name">
            Name
        </label>
        <input type="text" id="name" value="<?php echo $row['name'] ?>" placeholder="Enter your name" name="name"
            required />
    </div>

    <div class="form-control">
        <label for="email" id="label-email">
            Email
        </label>
        <input type="email" id="email" value="<?php echo $row['email'] ?>" placeholder="Enter your email" name="email"
            required />
    </div>

    <div class="form-control">
        <label for="age" id="label-age">
            Age
        </label>
        <input type="text" id="age" value="<?php echo $row['age'] ?>" placeholder="Enter your age" name="age"
            required />
    </div>
    <div class="form-control">
        <label for="address" id="address">
            Address
        </label>
        <input type="text" name="address" value="<?php echo $row['address'] ?>" id="address"
            placeholder="Enter your address" required />
    </div>
    <button type="submit" value="submit" name="update_btn">
        Update
    </button>
    <button><a href="view.php" style="text-decoration:none;">Back</a></button>
</form>

<?php
if (isset($_POST['update_btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    $query = "update details set name='$name', email = '$email', age='$age',address='$address' where id = '$id'";

    $sql = mysqli_query($con, $query);
    if ($sql) {
        ?>
        <script>
            alert("Data Updated  Successfully")
            window.open("http://localhost/PHPCRUD/view.php", "_self");
        </script>
        <?php
    } else {
        ?>
        <script>alert("Error")</script>
        <?php
    }
}
?>