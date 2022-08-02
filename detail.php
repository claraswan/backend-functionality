<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("inc/head-info.php");?>

</head>

<body>

    <?php include("inc/header.php");?>

    <div class="content">

    <?php 

    // if there is a query-parameter called file, then display the content of that file 

        $dir    = __DIR__ . '/daten/';
        $files = scandir($dir);

        foreach ($files as $file_name) {
            if ($_GET['file'] == $file_name) {
                    $result = file(__DIR__ . '/daten/' . $file_name);
                    $contents = implode($result);
                    echo $contents;
            }
        }

    ?>

    </div>
    
    <?php include("inc/footer.php");?>

</body>
</html>
