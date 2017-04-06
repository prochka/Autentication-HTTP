<?php
$login = 'admin';
$password = 111;
if(isset($_SERVER['PHP_AUTH_USER']) && ($_SERVER['PHP_AUTH_PW']==$password) && (strtolower($_SERVER['PHP_AUTH_USER'])==$login)){
    // авторизован успешно
   echo 'авторизован!';

} else {
    // если ошибка при авторизации, выводим соответствующие заголовки и сообщение
    header('WWW-Authenticate: Basic realm="Backend"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Authenticate required!';
}


?>    