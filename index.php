<?php include("inc/header.php");

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

                                <dt style= margin:10px; >Überschrift</dt> 
                                <dd>' . $contents['ueberschrift'] . '</dd>
                                <dt style= margin:10px; >Datum</dt>
                                <dd>' . $contents['datum'] . '</dd>
                                <dt style= margin:10px; >Betrag</dt> 
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
        
        
 include("inc/footer.php");?>