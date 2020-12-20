<?php
include_once("dbconnect.php");


if (isset($_GET['operation'])) {
    try {
        $sqlupdate = "UPDATE book SET title = '$title', author = '$author', price = '$price', description = '$description', publisher = '$publisher', isbn = '$isbn'";
        $conn->exec($sqlupdate);
        echo "<script> alert('Update Success')</script>";
        echo "<script> window.location.replace('mainpage.php?matric=".$matric."&name=".$name."') </script>;";
      } 
      catch(PDOException $e) {
        echo "<script> alert('Update Error')</script>";
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
</head>
<body>

   <h2 align="center">Update Book </h2>

  
    <form action="mainpage.php" method="get" align="center" onsubmit="return confirm('Are u sure want to update ?');">
       
        <label for="title"><b>Title:</b></label><br>
        <input type="text" name="title" id = "title" value="" required><br>
        <label for="author"><b>Author:</b></label><br>
        <input type="text" name="author" id = "author" value="" required><br>
        <label for="price"><b>Price:</b></label><br>
        <input type="text" name="price" id = "price" value="" required><br>
        <label for="description"><b>Description:</b></label><br>
        <input type="text" name="description" id = "description" value="" required><br>
        <label for="publisher"><b>Publisher:</b></label><br>
        <input type="text" name="publisher" id = "publisher" value="" required><br>
        <label for="isbn"><b>Isbn:</b></label><br>
        <input type="text" name="isbn" id = "isbn" value="" required><br><br>

        <input type="submit" value="Update"><br>
    </form>
    <p align="center"><a href="update.php?">Cancel</a></p>
    
</body>

</html> 