<<<<<<< HEAD
<?php
    include_once('../utilities/dbconnect.php');
    $id = $_GET['id'];
    $pID = $_GET['pID'];

        $query = "UPDATE foster SET approved = 1 WHERE id = $id";
        $query2 = "UPDATE animals SET status = 0 WHERE id = $pID";
        //INSERT DATA TO DATABASE
        if(mysqli_query($conn, $query)){
            if(mysqli_query($conn, $query2)){
                header("Location: ../thankFF.php");
            }else{
                echo "Can't Connect to Animal Database!";
            }
        }else{
            echo "Can't Connect to Fosters Database!";
        }

=======
<?php
    include_once('../utilities/dbconnect.php');
    $id = $_GET['id'];
    $pID = $_GET['pID'];

        $query = "UPDATE foster SET approved = 1 WHERE id = $id";
        $query2 = "UPDATE animals SET status = 0 WHERE id = $pID";
        //INSERT DATA TO DATABASE
        if(mysqli_query($conn, $query)){
            if(mysqli_query($conn, $query2)){
                header("Location: ../thankFF.php");
            }else{
                echo "Can't Connect to Animal Database!";
            }
        }else{
            echo "Can't Connect to Fosters Database!";
        }

>>>>>>> 706c2167ea97f6d170709abd0642e606d82008d4
?>