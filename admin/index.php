<!-- Erstelle admin Ordner mit index.php das über den Query-Parameter page Inhalt steuern kann -->

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("../inc/head-info.php");?>
    <link rel="stylesheet" href="../styles/main.css">

</head>

<body>

    <?php include("header.php");?>

    <div class="content">

        <?php

            if (isset($_GET['page'])) {
                switch ($_GET['page']) {
                    case 'contactform':
                        include('contactform.php');
                    break;
                    case 'login':
                        include('login.php');
                    break;
                    case 'overview':
                        include('overview.php');
                    break;
                    case 'detail':
                        include('detail.php');

                        // if there is also a query-parameter called file, then display the content of that file 
                        $dir    = '../daten/';
                        $files = scandir($dir);

                        foreach ($files as $file_name) {
                            if ($_GET['file'] == $file_name) {
                                $result = file('../daten/' . $file_name);
                                $contents = implode("\n",$result);
                                echo "<pre>".$contents."</pre>";
                             } // else {
                            //     // 2.6: Sollte die Datei im query-parameter nicht existieren zeige die Fehlermeldung (ohne file_exists gemacht)
                            //     echo '<p>Fehler 404 - Seite nicht gefunden</p>';
                            //     header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
                            //     break;
                            // } 
                            }
                        
                        break;
                        default:
                            if ($_GET['page'] == '') {
                                include('overview.php');
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
    
    <?php include("../inc/footer.php");?>

</body>
</html>