<html>
<link rel="stylesheet" href="css/style.css">
    <body>
        <section id="save-parking-action">
            <div class="to-input-2">
                <a href="index.html#save-parking-input-2">
                    <img class="go-back" src="img/previous_page.svg" atl="">
                </a>
            </div>
            <div class="plate-no-info">
                <h4>Database Connection status</h4>
                <h3>

                <?php
                $servername = "localhost";
                $username = "carpark";
                $password = "C@rpark123";

                // Create connection
                $conn = new mysqli($servername, $username, $password);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                echo "Connected successfully";
                ?>
                    
                </h3><br>

                <h4>Your car plate number:</h4>
                <h3><?php echo $_POST["plateNo"]; ?></h3>
            </div>
            <div class="find-exit">
                <a href="index.html#map-to-exit"><button id="btn-3">Find the nearest exit</button></a>
            </div>
        </section>
    </body>
</html>