<?php
include_once("dbconnect.php");
$title = $_POST["title"];
$author = $_POST["author"];
$price = $_POST["price"];
$description = $_POST ["description"];
$publisher =$_POST ["publisher"];
$isbn =$_POST ["isbn"];


try {
  //$conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
 //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO book(title, author, price, description, publisher, isbn)
  VALUES ('$title', '$author', '$price', '$description', '$publisher', '$isbn')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "<script> alert('Data recorded success!!')</script>";
  //echo "<script> window.location.replace('login.html')</script>";
  //echo "New record created successfully";
} catch(PDOException $e) {
  echo "<script> alert('Data recorded Failed!!')</script>";
  //echo "<script> window.location.replace('register.html')</script>";
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>

