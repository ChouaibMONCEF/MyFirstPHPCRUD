<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>
<body>
    <h1>Studetns</h1><hr>
    <table>
    <tr>
    <th>Name</th>
    <th>Age</th>
    <th>City</th>
    <th>Action</th>
    </tr>
    <?php 
    require 'connect.php';
    $requete="SELECT * FROM students";
    $query=mysqli_query($con,$requete);
    while($rows=mysqli_fetch_assoc($query)){
        $id=$rows['id'];
        echo "<tr>";
        echo "<td>".$rows['name']."</td>";
        echo "<td>".$rows['age']."</td>";
        echo "<td>".$rows['city']."</td>";
        echo "<td><a href='delete.php?id=$id'>Delete</a></td>";
        echo "<td><a href='index.php?id=$id'>Update</a></td>";
        
        echo "</tr>";
    }
    
    ?>
    </table>
    <?php
    echo "<td><a href='index.php'>Add new</a></td>";
    ?>
</body>
</html>