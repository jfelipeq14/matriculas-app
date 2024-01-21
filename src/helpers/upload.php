<?php include('db.php');?>
<?php
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

       
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = $con->query("INSERT into users (url_image, fechaCreacion) VALUES ('$imgContent', '$dataTime')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>