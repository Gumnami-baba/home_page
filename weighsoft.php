
<?php
include 'connectdb.php';

// $insert = false;
// $update = false;
// $delete = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if(isset($_POST['save']))
{	
    $Serial_NO = $_POST['serialnum'];
    $OperatorOne = $_POST['operator1'];
    // $OperatorTwo = $_POST['operator2'];
    $Vehical_NO = $_POST['vehicalnum'];
    $Wheel = $_POST['wheelnum'];
    $First_WT = $_POST['firstwt'];
    $Date_one = $_POST['date1'];
    $Time_One = $_POST['time1'];
    $Second_WT = $_POST['secondwt'];
    $Date_Two = $_POST['date2'];
    $Time_Two = $_POST['time2'];
    $Net_WT = $_POST['netwt'];
    $Note = $_POST['note'];
    $Paid = $_POST['paid'];
    // Sql query to be executed
    $sql = "INSERT INTO `weigh_soft` (`Serial_NO`,`Operator_One`,`Vehical_NO`,`Wheel`,`First_WT`,`Date_one`,`Time_One`,`Second_WT`,`Date_Two`,`Time_Two`,`Net_WT`,`Note`,`Paid`)
    VALUES ('$Serial_NO','$OperatorOne','$Vehical_NO','$Wheel','$First_WT','$Date_one','$Time_One','$Second_WT','$Date_Two','$Time_Two','$Net_WT','$Note','$Paid')";

    if (mysqli_query($conn, $sql)) {
    echo 'added new data';}

   if($insertquery){
    echo '';
    } else {
       ?>
        <script>window.location.replace("report.php");</script> <?php
   }

    mysqli_close($conn);
}
}

?>

