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

                case 'news_detail':

                    if (isset($_GET['file'])) { // 5.4: Im Frontend sollen nun die Inhalte der einzelnen News ausgegeben werden

                        $file = 'admin/pages/news_eintraege/' . $_GET['file'];
                        
                        if (file_exists($file)) {

                            $json_file = file_get_contents($file);

                            $contents = json_decode($json_file, true);
                            
                            echo ('<dl>

                                <dt>Überschrift</dt> 
                                <dd>' . $contents['ueberschrift'] . '</dd>
                                <dt>Datum</dt>
                                <dd>' . $contents['datum'] . '</dd>
                                <dt>Betrag</dt> 
                                <dd>' . $contents['text'] . '</dd>
         
                            </dl>');
                        
                        } else {
                        
                            echo '<p>Fehler 404 - Seite nicht gefunden</p>';
                            header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
                            break;  
                        
                        }
                    }
                    
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