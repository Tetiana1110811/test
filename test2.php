<?php
/**
 * Created by PhpStorm.
 * User: Nfyz
 * Date: 21.03.2018
 * Time: 17:55
 */
session_start();

$answered1 = $_POST ['answered1'];
$_SESSION ['answered1']=$answered1;
//print_r($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>Вопрос2:</p>
<p>3+3 =?</p>

<form action="test3.php" method="post">
    <input type="text" name="answered2"/>
    <input type="submit"/>


</form>

</body>
</html>
