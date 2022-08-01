<!DOCTYPE html>
<html lang="en">
    
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php print $page_title;?></title>

    <link rel="stylesheet" href="../styles/main.css">

</head>

<body>

    <div class="header">
        <div class="logo"><img src="../assets/logo.jpg" alt="orange hive logo"></div>
        <div class="nav"><nav>
            <a href="/kontakt.php">Kontakt</a> |
            <a href="/page1.php">Page 1</a> |
            <a href="/page2.php">Page 2</a> 
        </nav> 
        </div>
    </div>

    <div class="content">
        <?php
            echo ('<dl>

            <dt>Vorname</dt> 
            <dd>' . $_POST['vorname'] . '</dd>
            <dt>Nachname</dt>
            <dd>' . $_POST['nachname'] . '</dd>
            <dt>E-Mail</dt> 
            <dd>' . $_POST['email'] . '</dd>
            <dt>Bewertung</dt> 
            <dd>' . $_POST['bewertung'] . '</dd> 
            <dt>Nachricht</dt>
            <dd>' . $_POST['nachricht'] . '</dd>

            </dl>');
        ?>
    
    </div>

    <?php include("../inc/footer.php");?>

</body>

</html>