<?php
    $flname = "";
    if(isset($_POST["upfile"])){

       /*  echo "<pre>";
        print_r($_FILES);
        echo "</pre>";  */

        $path = "upfile/";
        $flname = $path . basename( $_FILES["flGAMBAR"]["name"]);
        move_uploaded_file($_FILES["flGAMBAR"]["tmp_name"],$flname);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload file</title>
</head>
<body>

    <form method="POST" action="uploadfile.php" enctype="multipart/form-data">
        <div>
            file gambar
            <input type="file" name="flGAMBAR" accept=".jpg, .jepg, .png">
        </div>

        <div>
            <button type="submit"> upload gambar </button>
        </div>
        <input type="hidden" name="upfile">
    </form>

    <div>
<?php
if(!$flname==""){
    echo "<img src='".$flname."'>";
}
?>
    </div>
</body>
</html>