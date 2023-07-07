<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex-php main</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="body.css">

</head>

<body>

    <?php include 'dbconnect.php';
     include 'nav.php'; ?>



    <div class="continer2">
        <h1>My Diary</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" required></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>




    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $stu_title = $_POST['title'];
    $stu_description = $_POST['description'];


    $sql = "INSERT INTO `diary` (`dtitle`, `sdescription`) VALUES ('$stu_title', '$stu_description')";
    $result = mysqli_query($conn, $sql) or die("query unsuccessfull");
    }
    ?>




    <div id="main-content">
        <h2>All Records</h2>

        <?php
    $sql1 = "SELECT * FROM `diary`";
    $result2 = mysqli_query($conn,$sql1) or die("query unsuccessfull");

    if(mysqli_num_rows($result2) > 0){
    ?>

        <table cellpadding="7px">
            <thead>
                <th>Id</th>
                <th>TITLE</th>
                <th>DESCRIPTION</th>
                <th>Action</th>
            </thead>
            <tbody>

                <?php
            while($row = mysqli_fetch_assoc($result2)){
            ?>

                <tr>
                    <td><?php echo $row['did']; ?></td>
                    <td><?php echo $row['dtitle']; ?></td>
                    <td><?php echo $row['sdescription']; ?></td>
                    <td>
                        <a href='edit.php?id=<?php echo $row['did']; ?>'>Edit</a>
                        <a href='delete-inline.php?id=<?php echo $row['did']; ?>'>Delete</a>
                    </td>
                </tr>

                <?php }  ?>

            </tbody>
        </table>

        <?php } else{
        echo "<h2>No records found</h2>";
        } 
        mysqli_close($conn);
        ?>

    </div>
    </div>




    <?php include 'footer.php';?>


</body>
<script src="main.js"></script>

</html>