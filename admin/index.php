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
                        
                        if (isset($_GET['file'])) {

                            include('pages/news_edit.php');

                            $file = 'pages/news_eintraege/' . $_GET['file'] ;
                            
                            // 5.5: Implementiere eine Editiermaske
                            
                            if (file_exists($file)) {

                                echo 'hi';
                                header('location: index.php?page=news_edit&file=' . $file);
                                // fill in the existing form on page with the saved data as value so that you can seemingly edit the file


                            } else {
                               
                                echo '<p>Fehler 404 - Seite nicht gefunden</p>';
                                header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
                                break;  

                            }
                        } else {

                            include('pages/news_maske.php');

                        }

                    break;

                    case 'news_edit':
                        
                        if (isset($_GET['file'])) {
                            include('pages/news_edit.php');
                            $file = 'pages/news_eintraege/' . $_GET['file'];
                            $_SESSION['old_file'] = $file;
                        } 

                    break;

                    case 'news_danke':
                        include('pages/news_danke.php');
                    break;

                    case 'news_danke_edit':
                        include('pages/news_danke_edit.php');
                    break;

                    case 'home':
                        include('pages/overview.php');
                    break;

                    case 'news_auflistung':
                        include('pages/news_auflistung.php');
                    break;

                    case 'user_admin':
                        include('pages/user_admin.php');
                    break;

                    case 'create_user':
                        include('pages/create_user.php');
                    break;

                    case 'create_user.inc':
                        include('pages/inc/create_user.inc.php');
                    break;
                    
                    case 'delete_user.inc':
                        include('pages/inc/delete_user.inc.php');
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

                    case 'delete':

                        if (isset($_GET['file'])) {

                            $file    = 'pages/news_eintraege/' . $_GET['file'] ;
                            
                            // 5.3: Gib eine Funktion die News zu löschen
                            
                            if (file_exists($file)) {
                               
                                unlink($file);
                                header('location: index.php?page=news_auflistung');

                            } else {
                               
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