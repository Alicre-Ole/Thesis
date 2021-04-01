<<<<<<< HEAD
<?php
    include_once('../utilities/dbconnect.php');
    $video = $_FILES['storyVid']['name'];
    $target_dir = "../videos/";
    $target_file = $target_dir . basename($_FILES["storyVid"]["name"]);

    $query = "UPDATE story SET video = '$video'";
    //INSERT DATA TO DATABASE
    if(mysqli_query($conn, $query) && move_uploaded_file($_FILES["storyVid"]["tmp_name"],         
    $target_file)){
        header("Location: ../wc.php");
    }else{
        echo "Can't Connect to Database!";
    }

=======
<?php
    include_once('../utilities/dbconnect.php');
    $video = $_FILES['storyVid']['name'];
    $target_dir = "../videos/";
    $target_file = $target_dir . basename($_FILES["storyVid"]["name"]);

    $query = "UPDATE story SET video = '$video'";
    //INSERT DATA TO DATABASE
    if(mysqli_query($conn, $query) && move_uploaded_file($_FILES["storyVid"]["tmp_name"],         
    $target_file)){
        header("Location: ../wc.php");
    }else{
        echo "Can't Connect to Database!";
    }

>>>>>>> 706c2167ea97f6d170709abd0642e606d82008d4
?>