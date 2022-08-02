        <h2>Kontakt</h2>

        <!-- 2.1: Erstelle einen Kontaktformular -->
        <form action="daten.php" method="post">

            <p>Vorname: <input name="vorname" type="text"></p>

            <p>Nachname: <input name="nachname" type="text"></p>

            <p>E-Mail: <input name="email" type="text"></p>

            <!-- 2.1: Bewertung soll über eine Schleife erstellt werden -->
            <p>Bewertung: <select name="bewertung">
            <?php

                for($option=0; $option <= 5; $option++){
                    echo '<option>' . $option . '</option>';
                }

            ?>
            </select></p>

            <p>Nachricht: <textarea rows="5" cols="24" name="nachricht"></textarea></p>

            <p><input type="submit" name="submit" value="Submit"></p>

        </form>