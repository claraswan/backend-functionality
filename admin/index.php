<?php 
    include("admin_header.php");

        if (isset($_GET['page'])) {

            switch ($_GET['page']) {

                case 'contactform':
                    include('pages/contactform.php');
                break;

                case 'news_maske':
                    include('pages/news_maske.php');
                break;

                case 'news_edit':
                    include('pages/news_edit.php');
                break;

                case 'news_maske.inc':
                    include('pages/inc/news_maske.inc.php');
                break;

                case 'news_edit.inc':
                    include('pages/inc/news_edit.inc.php');
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

                case 'edit_user':
                    include('pages/edit_user.php');
                break;

                case 'edit_user.inc':
                    include('pages/inc/edit_user.inc.php');
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

                case 'delete_news.inc':
                    include('pages/inc/delete_news.inc.php');
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
                    include('pages/inc/formdaten.inc.php');
                break;

                default:

                    if ($_GET['page'] == '') {
                        include('pages/overview.php');
                    } else {
                        include('../inc/err404.inc.php');
                    }

                break;
            } 

        } else {
            include('pages/overview.php');
        }


include("../inc/footer.php");?>