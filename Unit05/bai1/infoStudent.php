<?php

    session_start();
    $student = isset($_SESSION['student']) ? $_SESSION['student'] : [];
    
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent-Group</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <legend class="text-center my-3">
            <h2>ZENT GROUP - PHP - Thực hành về gửi dữ liệu sử dụng POST</h2>
        </legend>
        <h3 class="text-center my-3">THÔNG TIN SINH VIÊN</h3>
            <ul>
                <li><b>Họ và tên:</b> <?= $student['name']  ?></li>
                <li><b>Giới tính:</b> <?= $student['gender']  ?></li>
                <li><b>Ngày sinh:</b> <?= $student['dob']  ?></li>
                <li><b>Quê quán:</b> <?= $student['address']  ?></li>
                <li><b>Ngoại ngữ:</b> <?= $student['language']  ?></li>
                <li><b>Thông tin thêm:</b> <?= $student['info_more']  ?></li>
            </ul>
    </div>
</body>

</html>