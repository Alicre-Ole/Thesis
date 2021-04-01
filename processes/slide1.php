<<<<<<< HEAD
<?php
    include_once('../utilities/dbconnect.php');
    $slide1 = $_FILES['slide1']['name'];
    $target_dir = "../carousel/";
    $target_file = $target_dir . basename($_FILES["slide1"]["name"]);

    $sqlSlide1 = "UPDATE carousel SET slide1 = '$slide1'";
    //INSERT DATA TO DATABASE
    if(mysqli_query($conn, $sqlSlide1) && move_uploaded_file($_FILES["slide1"]["tmp_name"],         
    $target_file)){
        header("Location: ../wc.php");
    }else{
        echo "Can't Connect to Database!";
    }

=======
<?php
    include_once('../utilities/dbconnect.php');
    $slide1 = $_FILES['slide1']['name'];
    $target_dir = "../carousel/";
    $target_file = $target_dir . basename($_FILES["slide1"]["name"]);

    $sqlSlide1 = "UPDATE carousel SET slide1 = '$slide1'";
    //INSERT DATA TO DATABASE
    if(mysqli_query($conn, $sqlSlide1) && move_uploaded_file($_FILES["slide1"]["tmp_name"],         
    $target_file)){
        header("Location: ../wc.php");
    }else{
        echo "Can't Connect to Database!";
    }

>>>>>>> 706c2167ea97f6d170709abd0642e606d82008d4
?>