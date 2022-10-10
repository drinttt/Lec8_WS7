<?php include "connect.php"?>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            input,textarea{
                margin-top:0.3em;
            }
        </style>
    </head>
    <body>
        <form action="insert-member.php" method="POST">
            Username : <input type="text" name="uname"><br>
            Password : <input type="password" name="pass"><br>
            ชื่อ : <input type="text" name="name"><br>
            ที่อยู่ : <textarea name="address"></textarea><br>
            เบอร์โทรศัพท์ : <input type="text" pattern="(0[0-9]-[0-9]{4}-[0-9]{4})?" name="mobile"><br>
            อีเมล์ : <input type="email" name="email"><br>
            <input type="submit" value="เพิ่ม">
        </form>
    </body>
</html>