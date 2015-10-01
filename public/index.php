<?php

echo "Hello World!!!";
foreach ($_POST as $key => $val) {
        file_put_contents('debug.txt', $key . '=>' . $val . "\r\n", FILE_APPEND);
}
