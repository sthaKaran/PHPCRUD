<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        PHP CRUD Application
    </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="" method="post" id="form">
        <div class="form-control">
            <label for="name" id="label-name">
                Name
            </label>
            <input type="text" id="name" placeholder="Enter your name" name="name" required />
        </div>

        <div class="form-control">
            <label for="email" id="label-email">
                Email
            </label>
            <input type="email" id="email" placeholder="Enter your email" name="email" required />
        </div>

        <div class="form-control">
            <label for="age" id="label-age">
                Age
            </label>
            <input type="text" id="age" placeholder="Enter your age" name="age" required />
        </div>
        <div class="form-control">
            <label for="address" id="address">
                Address
            </label>
            <input type="text" name="address" id="address" placeholder="Enter your address" required />
        </div>
        <button type="submit" value="submit" name="save_btn">
            Submit
        </button>
        <button><a href="view.php" style="text-decoration:none;">View</a></button>
    </form>
    <?php
    include 'connection.php';
    if (isset($_POST['save_btn'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $query = "Insert into details (name, email, age, address) values ('$name','$email','$age','$address')";

        $sql = mysqli_query($con, $query);
        if ($sql) {
            ?>
            <script>alert("Data Inserted Successfully")</script>
            <?php
        } else {
            ?>
            <script>alert("Error")</script>
            <?php
        }
    }

    ?>
</body>

</html>