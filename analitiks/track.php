<?php
echo $_GET["sitename"];
file_put_contents("history.txt", "Recorded visit: " . $_GET["sitename"] . " - " . date("Y-m-d H:i:s") . "<br>\n" . file_get_contents("history.txt"));