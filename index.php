<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classmates</title>
    <link rel="stylesheet" href="/style/bootstrap.min.css">
    <script src="/style/bootstrap.min.js"></script>
</head>
<body>
    <?php 
    require 'connect.php';
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $requete="SELECT * FROM students WHERE id='$id'";
        $query=mysqli_query($con,$requete);
        $rows=mysqli_fetch_assoc($query);
        $name=$rows['name'];
        $age=$rows['age'];
        $city=$rows['city'];
    }
    
    
    ?>
    <div class="row justify-content-center" >
    <form action="instert.php? <?php if(isset($_GET['id'])){ echo "id=update"; } ?>" method="POST">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="<?php if(isset($_GET['id'])){ echo"$name"; } ?>" placeholder="Enter your name" >
            <input type="hidden" name="id" value="<?php if(isset($_GET['id'])) echo $_GET['id']; ?>" >
        </div>
        <div class="form-group">
            <label for="">Age</label>
            <input type="number" name="age" class="form-control" value="<?php if(isset($_GET['id'])){ echo"$age"; } ?>" placeholder="Enter your age" >
        </div>
        <div class="form-group">
            <label for="">City</label>
            <input type="text" name="city" class="form-control" value="<?php if(isset($_GET['id'])){ echo"$city"; } ?>" placeholder="Enter your City" >
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="save" >
            <?php
            if(isset($_GET['id'])){
                echo "Update";
            }else {
                echo "Save";
            }

            ?>
            </button>
        </div>
    </form>
    <a href="Read.php">students list</a>
</div>
</body>
</html>