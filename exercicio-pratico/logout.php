<?php

/**
 * Deve excluir o cookie e a session
 */

session_start();

$_SESSION = array();

session_destroy();
setcookie("usuario", '', -1);
setcookie("senha", '', -1);
setcookie("tema", '', -1);

header("Location: index.php");