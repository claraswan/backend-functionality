<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <title>Kontakt</title>
</head>

<body>

    <?php   
        include('../index.php');
    ?>

    <div class="header">
        <div class="logo"><img src="assets/logo.jpg" alt="orange hive logo"></div>
        <div class="nav"><h5>Menu</h5></div>
    </div>

    <div class="content">

        <h2>Kontakt</h2>
        <!-- 2.1: Erstelle einen Kontaktformular -->
        <form action='formulardaten.php' method='post'>

            <p>Vorname: <input name='vorname' type='text'></p>

            <p>Nachname: <input name='nachname' type='text'></p>

            <p>E-Mail: <input name='email' type='text'></p>

            <!-- 2.1: Bewertung soll über eine Schleife erstellt werden -->
            <select>
            <?php

                for($optionIndex=0; $optionIndex <= 5; $optionIndex++){
                    echo '<option>' . $optionIndex . '</option>';
                }

            ?>
            </select>

            <textarea rows = "5" cols = "20" name = "Nachricht">
            Geben Sie hier ihre Nachricht ein
            </textarea>

            <input type='submit' name='submit' value='Submit'>

        </form>

        <!-- 2.3: Speicher die Formulardaten auch in einer Text-Datei -->
        <?php

        $file = 'formulardaten.txt';
        // output POST array data into $data variable
        $data .= print_r($_POST);
        // put data into the formulardaten.txt file
        file_put_contents($file, $data);

        ?>


    </div>

    <div class="footer">
        <div class="link1">
            <a href="#">Home</a>
        </div>
        <div class="author"><h5> Aufgaben Von Clara Swanson </h5></div>
    </div>

</body>

</html>