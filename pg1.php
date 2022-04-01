<?php header("Content-type: text/html; charset=utf-8");
// Página 01

session_start();

echo 'Esta é a página 01, onde a sessão será criada';

$_SESSION['aula'] = 'PHP';
$_SESSION['hora'] = time();

// Link para a página 02:
echo '<br /><a href="pg2.php">Clique para ir à página 02</a>';
?>