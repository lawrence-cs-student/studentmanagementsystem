
<?php


include ('config.php');


$username = $_POST['username'];
$email = $_POST['username'];
$password = base64_encode($_POST['password']);
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];

$time = time();

$sql = "INSERT INTO `users` (`username`, `email`, `password`, `lastname`, `firstname`, `middlename`, `birthday`,
 `address`, `mobile`, `datecreated`) VALUES ('$username', '$username' , '$password', '$lastname', '$firstname',
  '$middlename', '$birthday', '$address', '$mobile', $time)";


if (mysqli_query($conn, $sql)) {
    header('Location: login.php');
} else {
    echo "Error:" . $sql . "<br>". mysqli_error($conn);
}
?>