<?php
$conn = mysqli_connect(
    "localhost", 
    "root", 
    "111111", 
    "opentutorials");
$sql = "
    INSERT INTO topic(title,description, created)
    VALUES(
        '{$_POST['title']}',
        '{$_POST['description']}',
        NOW()
        )
    ";
$result = mysqli_query($conn,$sql);
if ($result == false){
    echo "저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의 해 주세요";
    error_log(mysqli_error($conn));
}
?>