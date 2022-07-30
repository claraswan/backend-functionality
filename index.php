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

       switch ($_GET['page']) {
        case 'kontakt':
            require('pages/kontakt.php');
            include('pages/kontakt.php');  
        break;
        case 'page1':
            require('pages/page1.php');
            include('pages/page1.php');
        break;
        case 'page2':
            require('pages/page2.php');
            include('pages/page2.php');
        break;
        default:
            if ($_GET['page'] == '') {
                include('home.php');
            }
            else {
                echo '<p>Fehler 404 - Seite nicht gefunden</p>';
                http_response_code(404);
                include('home.php');
            }
        break;
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