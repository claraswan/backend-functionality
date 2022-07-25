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

    <div class="header">
        <div class="logo"><img src="assets/logo.jpg" alt="orange hive logo"></div>
        <div class="nav"><h5>Menu</h5></div>
    </div>

    <div class="content">
        <?php

            if (isset($_POST['submit'])) { //if form has been submitted
                
                '<dl>

                    <dt>Vorname</dt> 
                    <dd>' . $_POST['vorname'] . '</dd>' ;
                    '<dt>Nachname</dt>
                    <dd>' . $_POST['nachname'] . '</dd>' ;
                    '<dt>E-Mail</dt> 
                    <dd>' . $_POST['email'] . '</dd>' ;
                    '<dt>Bewertung</dt> 
                    <dd>' . $_POST['bewertung'] . '</dd>' ;
                    '<dt>Nachricht</dt>
                    <dd>' . $_POST['nachricht'] . '</dd>' ;

                '</dl>'
            }
            
        ?>
    </div>

    <div class="footer">
        <div class="link1">
            <a href="#">Home</a>
        </div>
        <div class="author"><h5> Aufgaben Von Clara Swanson </h5></div>
    </div>

</body>

</html>