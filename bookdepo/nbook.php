<?php

// if (isset($_COOKIE["email"])){
//   echo "Value is: " . $_COOKIE["email"];
// }

if (isset($_GET['title'])) {
  $title = $_GET["title"];
$author = $_GET["author"];
$price = $_GET["price"];
$description = $_GET ["description"];
$publisher =$_GET ["publisher"];
$isbn =$_GET ["isbn"];

  try {
    $sql = "INSERT INTO book(title, author, price, description, publisher, isbn)
    VALUES ('$title', '$author', '$price','$description','$publisher', '$isbn')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "<script> alert('Insert Success')</script>";
    //echo "<script> window.location.replace('mainpage.php?title=".$title."') </script>;";
  } catch(PDOException $e) {
    echo "<script> alert('Insert Error')</script>";
    //echo "<script> window.location.replace('register.html') </script>;";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Page</title>
</head>

<body>
    <h2 align="center">Insert New Book</h2>

    
    <form action="new.n.book.php" method="get" align="center" onsubmit="return confirm('Insert new book?');">
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

        <input type="submit" value="Submit">

    </form>
    <p align="center"><a href="mainpage.php?">Cancel</a></p>
</body>
</html>