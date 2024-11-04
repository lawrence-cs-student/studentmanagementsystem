
<?php

include ('config.php');


$email = $_POST['email'];
$password = base64_encode($_POST['password']);


$sql = "SELECT * FROM users where email = '$email' AND password = '$password'";

$validate = mysqli_query($conn, $sql);


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($validate && mysqli_num_rows($validate) > 0) {
        $row = mysqli_fetch_assoc($validate);
        $username = $row['username'];

        setcookie('username', $username, time() + (86400 * 30), '/');
        header('Location: home.php');
        exit();
    } else {
        echo "Error:" . $sql . "<br>". mysqli_error($conn);
    }

}

?>