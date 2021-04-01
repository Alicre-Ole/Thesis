<<<<<<< HEAD
<?php
    include_once('../utilities/dbconnect.php');
    $id = $_GET['pID'];

    $query = "DELETE FROM animals WHERE id = '$id'";
    //INSERT DATA TO DATABASE
    if(mysqli_query($conn, $query)){
        header("Location: ../admin.php");
    }else{
        echo "Pet's Not Deleted!";
    }

?>

=======
<?php
    include_once('../utilities/dbconnect.php');
    $id = $_GET['pID'];

    $query = "DELETE FROM animals WHERE id = '$id'";
    //INSERT DATA TO DATABASE
    if(mysqli_query($conn, $query)){
        header("Location: ../admin.php");
    }else{
        echo "Pet's Not Deleted!";
    }

?>

>>>>>>> 706c2167ea97f6d170709abd0642e606d82008d4
