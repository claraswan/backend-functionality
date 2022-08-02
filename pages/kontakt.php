<style>
    .required {
        color: red;
    }
</style>
        
<h2>Kontakt</h2>

    <!-- 2.1: Erstelle einen Kontaktformular -->
    <form action="index.php?page=daten" method="post">

        <p>Vorname: <span class="required">* </span><input name="vorname" type="text" aria-describedby="required-description" required></p>

        <p>Nachname: <span class="required">* </span><input name="nachname" type="text" aria-describedby="required-description" required></p>

        <p>E-Mail: <span class="required">* </span><input name="email" type="text" aria-describedby="required-description" required></p>

        <!-- 2.1: Bewertung soll über eine Schleife erstellt werden -->
        <p>Bewertung: <span class="required">* </span><select name="bewertung" aria-describedby="required-description" required>
        <?php

            for ($option=0; $option <= 5; $option++) {
                echo '<option>' . $option . '</option>';
            }

        ?>
        </select></p>

        <p>Nachricht: <textarea rows="5" cols="24" name="nachricht"></textarea></p>

        <p><input type="submit" name="submit" value="Submit"></p>

        <!-- 3.1: Erstelle Pflichfelder mit * und aria für Barrierefreiheit -->
        <!-- 3.2: Wurde ein Feld nicht ausgefüllt sollen die Daten nicht gespeichert werden sondern eine Fehlermeldung geben -->
        <p aria-hidden="true" id="required-description">
            <span class="required">* </span>Pflichfelder
        </p>

</form>