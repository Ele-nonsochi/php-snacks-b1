<!-- Snack 1
Passare come parametri GET name, mail e age Verificare che: name sia più lungo di 3 caratteri,mail contenga un punto e una chiocciola 
age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

if (strlen($name) < 3 || !strchr($mail, '.') || !strchr($mail, '@') || !is_numeric($age)) {
    exit('Accesso negato');
}
echo 'Accesso riuscito'

?>