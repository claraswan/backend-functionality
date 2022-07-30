<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <title>Home</title>
</head>
<body>
    
    <?php
       
       // 1.3: GET Parameter mit 'page' als Name
       // und Seitennamen als Wert erstellen
       $page = $_GET['page'];

       // if page parameter has been given, 
       if (isset(($_GET['page']))) {
            // redirect to the page specified
            $host  = $_SERVER['HTTP_HOST'];
            $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = '$page';
            header("Location: http://$host$uri/$extra");

            // make sure none of rest of script executes after redirect
            exit;
       }
       // 1.4: Fals der Wert des GET-Parameters
       // nicht bekannt sein soll
       else {
            // Fehlermeldung
           echo '<p>Fehler 404 - Seite nicht gefunden</p>';

           // http-Statuscode 404 rausgeben
           http_response_code(404);
       }
    
    ?>
     

     <div class="header">
        <div class="logo"><img src="assets/logo.jpg" alt="orange hive logo"></div>
        <div class="nav"><nav>
            <a href="/kontakt.php">Kontakt</a> |
            <a href="/page1.php">Page 1</a> |
            <a href="/page2.php">Page 2</a> 
        </nav> 
        </div>
        </div>

    <div class="footer">
        <div class="link1">
            <a href="#">Home</a>
        </div>
        <div class="author"><h5> Aufgaben Von Clara Swanson </h5></div>
    </div>

</body>
</html>