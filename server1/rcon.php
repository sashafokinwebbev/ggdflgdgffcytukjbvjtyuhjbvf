<h1>server 1</h2>
<h3>RCON</h3>
<form method="POST">
<input type="text" name="command" value="" />
<input type="submit" /></p>
</form>
<?php
include('config.php');
$send = $_POST['command'];
$host       = '127.0.0.1';
$port       = '25575';
$pass       = '12345678';
$command    = '"'.$send.'"';
$toExec     = 'mcrcon -c -H '.$host.' -P '.$port.' -p '.$pass. " $command";
if($send != ''){
echo "<pre>";
echo $send;
echo "</pre>";
echo "<pre>";
print_r(shell_exec($toExec));
echo "</pre>";
}


?>