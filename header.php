<?php


$id=$_SESSION['id'];
        $sql = "SELECT nomeusuario from usuario where idusuario=$id";                                
		$result = mysqli_query($link,$sql)or die("Erro no banco de dados!"); 
 
		$total = mysqli_num_rows($result); 
		$dados = mysqli_fetch_array($result);  

        $nome=$dados[0]; 
         date_default_timezone_set('America/Sao_Paulo');
         
echo"
<HTML>
<head>
<link rel='stylesheet' type='text/css' href='styles.css' />
</head>
<body>
<header>
   Este é o cabeçalho
</header>
";

echo "Data: " . date("d/m/Y")."   Hora: "  . date("H:i:s")." Usuário logado: $nome";
?>