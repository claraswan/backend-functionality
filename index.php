<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("inc/head-info.php");?>

</head>

<body>

    <?php include("inc/header.php");?>

    <div class="content">

        <?php
        
        // 1.3: GET Parameter mit 'page' als Name
        // und Seitennamen als Wert erstellen

        if (isset($_GET['page'])) {

            switch ($_GET['page']) {

                case 'kontakt':
                    include('kontakt.php');
                break;

                case 'daten':
                    include('daten.php');
                break;

                case 'home':
                    include('home.php');
                break;

                case 'news':
                    include('news.php');
                break;

                default:
                    if ($_GET['page'] == '') {

                        include('home.php');

                    } else {

                        echo '<p>Fehler 404 - Seite nicht gefunden</p>';
                        header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");

                    }
                break;

            } 
                
        }
        
        
        ?>
    </div>
    
    <?php include("inc/footer.php");?>

</body>

</html>