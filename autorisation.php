<?php
require_once "header.php";
?>
<h2>Авторизация</h2>
<form method="post">
    Логин:<input type="text" name="login">
    Пароль:<input type="password" name="pass">
    <input type="submit" value="Войти">
</form>

<?php

$login = $_POST['login'];
$passw = $_POST['pass'];

autorisation($login,$passw);