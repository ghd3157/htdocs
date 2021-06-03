<?php
 $conn = mysqli_connect("localhost","root",3260406);
 mysqli_select_db($conn, "opentutorials");
 $sql = "SELECT * FROM user WHERE name='".$name."'
        AND password='".$password."'";
 $result = mysqli_query($conn, $sql);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
     $password = $_GET["password"];
     //외부에서 입력값 받아서 대입(주소창)
     if ($password == "1111") {
       echo "안녕하세요. 반갑습니다!";
     } else {
       echo "누구십니까?";
     }
     ?>
  </body>
</html>
