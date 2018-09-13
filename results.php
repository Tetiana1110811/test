<?php
//print_r($_POST);проверка наличия переменной в массиве $_POST
session_start();
$answered1 = $_SESSION['answered1'];
$answered2 = $_SESSION['answered2'];
$answered3 = $_POST['answered3'];



if (($answered1 == 4)  &&  ($answered2 == 6) && ($answered3 == 8)) {
    echo '+';
} else {
    echo '-';
}


?>
<p>Ваш результат</p>
