<?php
if (isset($_POST['saveNow'])) {
    if (isset($_POST['plateNo']) && isset($_POST['timeIn']) &&
        isset($_POST['timeOut']) && isset($_POST['slotNo'])) {
        
        $plateNo = $_POST['plateNo'];
        $timeIn = $_POST['timeIn'];
        $timeOut = $_POST['timeOut'];
        $slotNo = $_POST['slotNo'];

        $host = "localhost";
        $dbUsername = "carpark";
        $dbPassword = "C@rpark123";
        $dbName = "carpark_db";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Insert = "INSERT INTO record(plateNo, timeIn, timeOut, slotNo) values(?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            $stmt->close();

            $stmt = $conn->prepare($Insert);
            $stmt->bind_param("ssssii",$plateNo, $timeIn, $timeOut, $slotNo);
            $stmt->execute()
            echo "Recorded Car Park Location";
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "Please fill in the details.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>