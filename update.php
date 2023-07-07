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
    <!-- This is 2nd method for "UPDATE" method using ID from "CRUD". -->
<?php include 'nav.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php
    if (isset($_POST['showbtn'])) {
        include 'dbconnect.php';

        $stu_id = $_POST['id'];
        $sql = "SELECT * FROM `diary` WHERE did = $stu_id";
        $result = mysqli_query($conn,$sql) or die("query unsuccessfull");

        if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
        
    ?>

<form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Title</label>
          <input type="hidden" name="did" value="<?php echo $row['did']; ?>"/>
          <input type="text" name="dtitle" value="<?php echo $row['dtitle']; ?>"/>
      </div>
      <div class="form-group">
          <label>Description</label>
          <input type="text" name="sdescription" value="<?php echo $row['sdescription']; ?>"/>
      </div>
      

      <input class="submit" type="submit" value="Update"/>
    </form>

    <?php 
    }
    }
    }
    ?>

</div>
</div>
<?php include 'footer.php';?>

</body>
<script src="main.js"></script>

</html>