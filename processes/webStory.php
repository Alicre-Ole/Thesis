<<<<<<< HEAD
<?php
    include_once('../utilities/dbconnect.php');
    $story = $_POST['story'];

    $sqlStory = "UPDATE story SET story = '$story'";
    //INSERT DATA TO DATABASE
    if(mysqli_query($conn, $sqlStory)){
        header("Location: ../wc.php");
    }else{
        echo "Can't Connect to Database!";
    }

=======
<?php
    include_once('../utilities/dbconnect.php');
    $story = $_POST['story'];

    $sqlStory = "UPDATE story SET story = '$story'";
    //INSERT DATA TO DATABASE
    if(mysqli_query($conn, $sqlStory)){
        header("Location: ../wc.php");
    }else{
        echo "Can't Connect to Database!";
    }

>>>>>>> 706c2167ea97f6d170709abd0642e606d82008d4
?>