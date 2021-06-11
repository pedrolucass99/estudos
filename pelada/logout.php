<?php

include_once 'init.php';

logout();
unset($_SESSION['nome']);
redirect('index.php');

?>



