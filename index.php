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
                    include('inc/news_detail.inc.php');
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
                        include('inc/err404.inc.php');
                    }
                break;

            } 
                
        }
        
        
 include("inc/footer.php");?>