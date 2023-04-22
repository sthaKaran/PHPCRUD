<?php
include 'connection.php';
?>
<button style="float:right;"><a href="index.php" style="text-decoration:none;">Home</a></button>
<center>
    <h1>All Records</h1>
    <table border="1px" cellspacing="0" cellpadding="10px">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Address</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        $query = "Select * from details order by name";
        $sql = mysqli_query($con, $query);
        $result = mysqli_num_rows($sql);
        if ($result) {
            while ($row = mysqli_fetch_array($sql)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row['id'] ?>
                    </td>
                    <td>
                        <?php echo $row['name'] ?>
                    </td>
                    <td>
                        <?php echo $row['email'] ?>
                    </td>
                    <td>
                        <?php echo $row['age'] ?>
                    </td>
                    <td>
                        <?php echo $row['address'] ?>
                    </td>
                    <td>
                        <button><a href="update.php?id= <?php echo $row['id'] ?>"
                                style="text-decoration:none;color:green; font-weight:bold;">Update</a></button>
                        <button><a onclick="return confirm('Are you sure you want to delete?')"
                                href="delete.php?id= <?php echo $row['id'] ?>"
                                style="text-decoration:none;color:red; font-weight:bold;">Delete</a></button>
                    </td>
                </tr>
                <?php
            }
        } else {
            ?>
            <tr>
                <td>No record found</td>
            </tr>
            <?php
        }
        ?>
    </table>
</center>