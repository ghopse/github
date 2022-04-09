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
                <h4>Your car plate number:</h4>
                <h3><?php echo $_POST["plateNo"]; ?></h3>
            </div>
            <div class="find-exit">
                <a href="index.html#map-to-exit"><button id="btn-3">Find the nearest exit</button></a>
            </div>
        </section>
    </body>
</html>
