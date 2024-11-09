<?php
    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    if(!move_uploaded_file($_FILES['fileToUpload']["tmp_name"], $target_file)){
        // no
        header("Location: index.php?status=your_image_was_not_uploaded");
    }else{
        // yes
        header("Location: index.php?status=success&imgFileLocation={$target_file}");   
    }

?>