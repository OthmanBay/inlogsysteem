<?php
include_once 'header.php';

?>
<section class="main-container">
    <div class="main-wrapper">
        <h2>Signup</h2>
        <form class= "signup-form" action="includes/test.php" method="POST">
            <label id="voornamen"><input type="text" name="voornaam" autofocus placeholder="Naam"/></label>
            <br>
            <br>
            <label id="tussenvoegsels"><input type="text" name="tussenvoegsel" placeholder="tussenvoegsel"/></label>
            <br>
            <br>
            <label id="achternamen"><input type="text" name="achternaam" placeholder="achternaam"/></label>
            <br>
            <br>
            <label id="email"><input type="email" name="emailadres" placeholder="Email"/></label>
            <br>
            <br>
            <input type="submit" name="submit" id="knop"/>

        </form>
</section>

<?php
include_once 'footer.php';

?>
