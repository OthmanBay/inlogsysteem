<?php
//POST-ARRAY UITLEZEN
$voornaam = $_POST['voornaam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];
$emailadres = $_POST['emailadres'];

//DATA IN DATABASE STOPPEN
//1. VERBINDING MAKEN MET DATABASE
$dbc = mysqli_connect('localhost','root','','loginsystem') or die ('Error');

//2. QUERY SCHRIJVEN (OPDRACHT SCHRIJVEN VOOR DE DATABASE
$query = "INSERT INTO nieuwsbrief VALUES (0,'$voornaam','$tussenvoegsel','$achternaam','$emailadres')";


//3. QUERY UITVOERNE
$result = mysqli_query($dbc,$query)or die('Error querying.');

//4. VERBINDING VERBREKEN
mysqli_close($dbc);



//BEVESTIGEN DAT DATA IN DATABASE STAAT
if ($result)  {
    echo 'De volgende gegevens zijn toegevoegd aan de database';
    echo'<br>';
    echo $voornaam . '<br>';
    echo $tussenvoegsel.'<br>';
    echo $achternaam.'<br>';
    echo $emailadres.'<br>';
}
else{
    echo'Sorry, er is iets misgegaan. Probeer het opnieuw.';
}

