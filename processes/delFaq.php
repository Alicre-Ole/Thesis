<<<<<<< HEAD
<?php
    include_once('../utilities/dbconnect.php');
    $id = $_GET['id'];

    $query = "DELETE FROM faqs WHERE id = '$id'";
    //INSERT DATA TO DATABASE
    if(mysqli_query($conn, $query)){
        header("Location: ../wc.php");
    }else{
        echo "FAQ's Not Deleted!";
    }

?>

=======
<?php
    include_once('../utilities/dbconnect.php');
    $id = $_GET['id'];

    $query = "DELETE FROM faqs WHERE id = '$id'";
    //INSERT DATA TO DATABASE
    if(mysqli_query($conn, $query)){
        header("Location: ../wc.php");
    }else{
        echo "FAQ's Not Deleted!";
    }

?>

>>>>>>> 706c2167ea97f6d170709abd0642e606d82008d4
