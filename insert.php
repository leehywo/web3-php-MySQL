<?php
// $mysqli = mysqli_connect("example.com", "user", "password", "database");
// $res = mysqli_query($mysqli, "SELECT 'Please, do not use ' AS _msg FROM DUAL");
// $row = mysqli_fetch_assoc($res);
// echo $row['_msg'];

$conn = mysqli_connect("localhost", "root", "111111", "opentutorials");
$sql = "
    INSER INTO topic(title,description, created)
    VALUES(
        'MYSQL',
        'MYSQL is...',
        NOW())
    ";
$result = mysqli_query($conn,$sql);
if ($result == false){
    echo mysqli_error($conn);
}
?>