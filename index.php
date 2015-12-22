<?php
include "autoload.php";

use Controller\LightShowController;


$lightShow = new LightShowController();

if ($_POST['btnStart']) {
    $lightShow->playPlaylist();
} else if ($_POST['btnStop']) {
    $lightShow->stop();
}

//$songs[] = $lightShow->getSongs();


?>

<html>
    <head></head>

    <body>
        <h1>Christmas Tree</h1>

        <form method="post">
            <input type="button" value="start playlist" name="btnStart" />
            <input type="button" value="stop playlist" name="btnStop" />

            <input type="button" value="start playlist" name="btnStart" />
            <input type="button" value="start playlist" name="btnStart" />

        </form>
    </body>
</html>
// Todo: Start coding here