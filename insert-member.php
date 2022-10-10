<?php include "connect.php"?>
<?php
    $stmt=$pdo->prepare("INSERT INTO member VALUES (?,?,?,?,?,?)");
    $stmt->bindParam(1,$_POST["uname"]);
    $stmt->bindParam(2,$_POST["pass"]);
    $stmt->bindParam(3,$_POST["name"]);
    $stmt->bindParam(4,$_POST["address"]);
    $stmt->bindParam(5,$_POST["mobile"]);
    $stmt->bindParam(6,$_POST["email"]);
    $stmt->execute();
?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        เพิ่มข้อมูล User ใหม่ได้แล้ว Username คือ <?=$_POST["uname"]?>
    </body>
</html>