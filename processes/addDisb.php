<<<<<<< HEAD
<?php
    include_once('../utilities/dbconnect.php');
    $month = $_POST['month'];
    $payee = $_POST['payee'];
    $invoice = $_POST['invoice'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];

        $query = "INSERT INTO disbursement (month, payee, invoice, amount, date) VALUES ('$month', '$payee', '$invoice', '$amount', '$date')";
        //INSERT DATA TO DATABASE
        if(mysqli_query($conn, $query)){
            header("Location: ../wc.php");
            }else{
                echo "Can't Connect to Database!";
        }

=======
<?php
    include_once('../utilities/dbconnect.php');
    $month = $_POST['month'];
    $payee = $_POST['payee'];
    $invoice = $_POST['invoice'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];

        $query = "INSERT INTO disbursement (month, payee, invoice, amount, date) VALUES ('$month', '$payee', '$invoice', '$amount', '$date')";
        //INSERT DATA TO DATABASE
        if(mysqli_query($conn, $query)){
            header("Location: ../wc.php");
            }else{
                echo "Can't Connect to Database!";
        }

>>>>>>> 706c2167ea97f6d170709abd0642e606d82008d4
?>