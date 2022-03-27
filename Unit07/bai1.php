<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <legend>Get files</legend>
        <form action="uploadFile.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tên tài liệu</label>
                <input type="text" class="form-control" id="" name="">
            </div>
            <div class="form-group">
                <label for="">Upload ảnh đại diện</label>
                <input type="file" class="form-control" id="" name="avatar">
            </div>

            <button type="submit" class="btn btn-primary">Upload File</button>
        </form>
        <br>
        <?php if (isset($_SESSION["uploadStatus"]) && $_SESSION["uploadStatus"][0] == false) { ?>
            <div class="alert alert-danger">
                <?php
                foreach ($_SESSION["uploadStatus"][1] as $error) {
                    echo "<p> - " . $error . "</p>";
                }
                unset($_SESSION["uploadStatus"]);
                ?>
            </div>
        <?php } ?>
        <?php if (isset($_SESSION["uploadStatus"]) && $_SESSION["uploadStatus"][0] == true) { ?>
            <div class="alert alert-success">
                Đường dẫn sau khi upload: <?= $_SESSION["uploadStatus"][1]; ?>
            </div>
        <?php
            unset($_SESSION["uploadStatus"]);
        }
        ?>
    </div>
</body>

</html>