<?php
session_start();
if (isset($_SESSION['userSession'])!="")
{
    header("Location: home.php");
}

include_once '../connect.php';

    // If the values are posted, insert them into the database.
  if (isset($_POST['submit'])) {
  $firstname = $_POST['firstname']; 
  $lastname = $_POST['lastname'];
  $function = $_POST['function'];
  $email = $_POST['email'];
  $sql="SELECT * FROM users WHERE email='$email' AND firstname='$firstname'";
  $password = $password = hash("SHA512", $_POST['password']);
  $result = mysqli_query($mysqli,$sql);
  $num_rows = mysqli_num_rows($result);
 }

if($num_rows >0){
  echo "<script>alert('dit e-mail is al in gebruik');
    window.location='../index.html'</script>"; 
}

else {
$query =" INSERT INTO users (id, firstname, lastname, profile, password, email)
VALUES ('','$firstname', '$lastname', '$function', '$password', '$email')";
 
    if ($mysqli->query($query)=== TRUE){
        echo "<script>alert('U kunt nu inloggen');
    window.location='../index.html'</script>";
    }else
    {
        echo "Error: " . $query . "<br>" . $mysqli->error;
    }
}

?>