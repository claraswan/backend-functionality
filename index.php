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
                    include('index.php');
                }
                else {
                    echo '<p>Fehler 404 - Seite nicht gefunden</p>';
                    http_response_code(404);
                }
            break;
            }
        
        ?>
    </div>
    
    
    <?php include("inc/footer.php");?>

</body>
</html>