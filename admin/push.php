<?php
$msg = $_GET['msg'];
echo shell_exec("./push.sh \"$msg\"");
?>
