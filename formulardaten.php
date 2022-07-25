<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <title>Kontakt</title>
</head>

<body>

    <?php   
        $name = $_POST['name'];

        if (isset($_POST['submit'])) { //if form has been submitted
            echo "Vorname: " . $_POST['vorname'] . "<br>";
            echo "Nachname: " . $_POST['nachname'] . "<br>";
            echo "E-Mail: " . $_POST['email'] . "<br>";
            echo "Bewertung: " . $_POST['bewertung'] . "<br>";
            echo "Nachricht: " . $_POST['nachricht'] . "<br>";
        }
    ?>

    <div class="header">
        <div class="logo"><img src="assets/logo.jpg" alt="orange hive logo"></div>
        <div class="nav"><h5> Menu </h5></div>
    </div>

    <div class="content">

    </div>

    <div class="footer">
        <div class="link1">
            <a href="#">Home</a>
        </div>
        <div class="author"><h5> Aufgaben Von Clara Swanson </h5></div>
    </div>

</body>

</html>