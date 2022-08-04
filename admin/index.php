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
                        include('pages/contactform.php');
                    break;

                    case 'news_maske':
                        include('pages/news_maske.php');
                    break;

                    case 'news_danke':
                        include('pages/news_danke.php');
                    break;

                    case 'home':
                        include('pages/home.php');
                    break;

                    case 'news_auflistung':
                        include('pages/news_auflistung.php');
                    break;

                    case 'logout':
                        include('pages/logout.php');
                    break;

                    case 'login':
                        include('login.php');
                    break;

                    case 'overview':
                        include('pages/overview.php');
                    break;
                    
                    case 'detail':
                        include('pages/detail.php');

                        if (isset($_GET['file'])) {

                            $file    = 'pages/daten/' . $_GET['file'] ;

                            if (file_exists($file)) {

                                $result = file($file);
                                $contents = implode("\n",$result);
                                echo "<pre>".$contents."</pre>";

                            } else{

                                echo '<p>Fehler 404 - Seite nicht gefunden</p>';
                                header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
                                break;  

                            }
                        }
                        
                    break;

                    default:

                        if ($_GET['page'] == '') {

                            include('pages/overview.php');

                        } else {

                            echo '<p>Fehler 404 - Seite nicht gefunden</p>';
                            header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");

                        }

                    break;
                } 

            } else {

                include('pages/overview.php');

            }

        ?>

    </div>
    
    <?php include("../inc/footer.php");?>

</body>

</html>