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
                    include('pages/kontakt.php');
                break;
                case 'page1':
                    include('pages/page1.php');
                break;
                case 'page2':
                    include('pages/page2.php');
                break;
                case 'datei-liste':
                    include('datei-liste.php');
                break;
                case 'detail':
                    include('detail.php');

                    // if there is also a query-parameter called file, then display the content of that file 
                    $dir    = __DIR__ . '/daten/';
                    $files = scandir($dir);

                    foreach ($files as $file_name) {
                        if ($_GET['file'] == $file_name) {
                            $result = file(__DIR__ . '/daten/' . $file_name);
                            $contents = implode("\n",$result);
                            echo "<pre>".$contents."</pre>";
                        } else {
                            // 2.6: Sollte die Datei im query-parameter nicht existieren zeige die Fehlermeldung (ohne file_exists gemacht)
                            echo '<p>Fehler 404 - Seite nicht gefunden</p>';
                            header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
                            break;
                        }
                    }

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
                
        }
        
        
        ?>
    </div>
    
    <?php include("inc/footer.php");?>

</body>
</html>