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
    <!--This is 2nd method,we will delete data in "index.php" by using "ID" -->
<?php include 'nav.php';

if(isset($_POST['deletebtn'])){
    include 'dbconnect.php';
    $stu_id = $_POST['id'];

    $sql = "DELETE FROM diary WHERE `did` = '$stu_id'";
    $result = mysqli_query($conn,$sql) or die("Query unsuccessfull");

    header("Location: http://localhost/extablephp/main.php");

    mysqli_close($conn);
}
?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
<?php include 'footer.php';?>

</body>
<script src="main.js"></script>

</html>