<?php
    session_start();
    function uploadFile($inputName, $targetDir, $allowTypes, $maxSize, $overide){
        $uploadStatus = true;
        $targetFile = $targetDir . "/" . basename($_FILES[$inputName]["name"]);
        $errors = array();

        $types = "";
        if (is_array($allowTypes)){
            foreach ($allowTypes as $key => $type){
                $types = $type . ".";
            }
        }
        $types = trim($types,",");

        if (!isset($_FILES[$inputName])){
            $errors = "Không có dữ liệu file";
            $uploadStatus = false;
        }

        if($_FILES[$inputName]["error"] != 0){
            $errors = "Dữ liệu upload bị lỗi";
            $uploadStatus = false;
        }

        $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
        if(!in_array($imageFileType,$allowTypes)){
            $errors[] = "Chỉ được upload các định dạng" . $types;
            $uploadStatus = false;
        }
        if($_FILES[$inputName]["size"] > $maxSize*1024*1024){
            $errors[] = "Không được upload ảnh hớn hơn $maxSize (MB).";
            $uploadStatus = false;
        }

        if(file_exists($targetFile) && $overide == false){
            $errors[] = "Tên file đã tồn tại trên server, không được ghi đè";
            $uploadStatus = false;
        }

        if($uploadStatus){
            if(move_uploaded_file($_FILES[$inputName]["tmp_name"],$targetFile)){
                return array(true,$targetFile);
            }else{
                $errors[] = "Có lỗi xảy ra khi upload file. Vui lòng kiểm tra lại";
                return array(false,$errors);
            }
        }else{
            return array(false,$errors);
        }
    }
    $upload = uploadFile("avatar","documents", array("jpg","bmp","png","gif"),5,true);
    $_SESSION["uploadStatus"] = $upload;
    header("Location:bai1.php");
?>