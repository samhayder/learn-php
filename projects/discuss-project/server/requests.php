<?php
include "./db.php";

session_start();

$userName = htmlspecialchars($_POST['userName']);
$userEmail = $_POST['userEmail'];
$userPassword = $_POST['userPassword'];
$userAddress = $_POST['userAddress'];

if (isset($_POST['signup'])) {
    $user = $conn->prepare(query: "Insert into `users` (`id`,`name`,`email`,`password`,`address`) values (NULL, '$userName', '$userEmail', '$userPassword', '$userAddress')");

    $result = $user->execute();
} else {
    echo "No Record...";
}

// check is result
if ($result) {
    $_SESSION["user"] = $userName; /* ["name" => $userName, "email" => $userEmail] */
    header("location: /learn-php/projects/discuss-project/");
}
