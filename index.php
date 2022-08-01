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
        $page = $_GET['page'];

        switch ($_GET['page']) {
            case 'kontakt':
                include('pages/kontakt.php');
            break;
            case 'page1':
                include('pages/page1.php');
            break;
            case 'page2':
                include('pages/page2.php');
            break;
            case 'daten':
                include('pages/daten.php');
            break;
            default:
                if ($_GET['page'] == '') {
                    include($_SERVER['PHP_SELF']);
                }
                else {
                    echo '<p>Fehler 404 - Seite nicht gefunden</p>';
                    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
                }
            break;
            }
        
        ?>
    </div>
    
    <div class="footer">
        <?php include("inc/footer.php");?>
    </div>

</body>
</html>