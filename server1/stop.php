<?php
include('config.php');
$command    = 'save-all';
$toExec     = 'mcrcon -c -H '.$host.' -P '.$port.' -p '.$pass. " $command";
$command    = 'stop';
shell_exec($toExec);
$toExec     = 'mcrcon -c -H '.$host.' -P '.$port.' -p '.$pass. " $command";
shell_exec($toExec);
header('Location: /');
?>