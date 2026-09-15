<?php

include("../includes/db.php");

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if ($_FILES['img']['error'] == 0) {
    $image = $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], "../uploads/".$image);

    $sql = "UPDATE users SET name='$name', email='$email', password='$password', image='$image' WHERE id='$id'";
} else {
    $sql = "UPDATE users SET name='$name', email='$email', password='$password' WHERE id='$id'";
}

mysqli_query($con, $sql);

header("Location: users.php");
exit();

?>