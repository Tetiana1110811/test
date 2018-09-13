<?php
/**
 * Created by PhpStorm.
 * User: Nfyz
 * Date: 21.03.2018
 * Time: 17:55
 */

session_start();

$answered2 = $_POST ['answered2'];
$_SESSION ['answered2']=$answered2;

//print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>Вопрос3:</p>
<p>4+4 =?</p>

<form action="results.php" method="post">
    <input type="text" name="answered3"/>
    <input type="submit"/>


</form>

</body>
</html>
