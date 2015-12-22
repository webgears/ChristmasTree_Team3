<?php
include "autoload.php";

use Controller\LightShowController;


$lightShow = new LightShowController();

if ($_POST['btnStart']) {
    $lightShow->playPlaylist();
} else if ($_POST['btnStop']) {
    $lightShow->stop();
}

$songs[] = $lightShow->getSongs();
foreach ($songs as &$value) {
    echo $value;
}

?>

<html>
    <head>
        <title>Leuchtender Christbaum </title>
    </head>

    <body>
        <h1>Christmas Tree</h1>

        <form method="post" action="index.php">
            <input type="submit" value="start playlist" name="btnStart" />
            <input type="submit" value="stop playlist" name="btnStop" />
        </form>
    </body>
</html>