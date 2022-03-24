<?php
    session_start();
    $student = $_POST;
    $_SESSION['student'] = $student;

   header('Location: infoStudent.php');  
?>