<?php
$host = "localhost";
$dbUsername = "carpark";
$dbPassword = "C@rpark123";
$dbName = "carpark_db";

$plateNo = $_POST['plateNo'];
$timeIn = $_POST['timeIn'];
$timeOut = $_POST['timeOut'];
$slotNo = $_POST['slotNo'];

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if(isset($_POST['btn_1'])){

    if(!empty($plateNo)){

        $query = "insert into form(plateNo) values('$plateNo')" ;

        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if($run){
            echo " Plate Number recorded" ;
        }
        else{

            echo "Failed to record"
        }

    }
    else{
        echo "Please fill your vehicle plate number" ;
    }
 
}
?>