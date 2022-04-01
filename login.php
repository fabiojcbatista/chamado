<?php header("Content-type: text/html; charset=utf-8");
require_once("conexao.php");

if(isset($_REQUEST['valor']) and ($_REQUEST['valor'] == 'enviado')) {
 session_start();

 $_SESSION['login'] = $_POST['login'];
 $_SESSION['senha'] = $_POST['senha'];
// exibe link para a página 02:

$sql = "SELECT idusuario from usuario where loginusuario='".$_POST['login']."' and senhausuario='".$_POST['senha']."'";                                
$result = mysqli_query($link,$sql)or die("Erro no banco de dados!"); 
 
$total = mysqli_num_rows($result); 
$dados = mysqli_fetch_array($result);  

$_SESSION['id']=$dados['idusuario'];
$ii=0;
  while($row = mysqli_fetch_array($result)) {
                 
        $ii++;
       }
	   
	if(mysqli_num_rows ($result) > 0 )
	   {
		   //$_SESSION['id']=rows[0];
		   header("Location: /Chamado/home.php");
	   }  else
	   {
		   echo "<p fontcolor='red'> Login ou senha inválido!</p>";
		   header("Location: /Chamado/login.php?valor=inválido");
	   }
 }
else {
	
	if(isset($_REQUEST['valor']) and ($_REQUEST['valor'] == 'inválido')) {
		echo "<p style='background-color:DodgerBlue;'> Login ou senha inválido!</p>";
	}
	
?>
<html >
<head>

 <link rel='stylesheet' type='text/css' href='styles.css' />
<title> Acesso </title>
<style type="text/css">
        * { margin: 0; padding: 0; font-family:Tahoma; font-size:9pt;}
        #divCenter { 
                background-color: #e1e1e1; 
                width: 400px; 
                height: 150px; 
                left: 50%; 
                margin: -130px 0 0 -210px; 
                padding:10px;
                position: absolute; 
                top: 50%; }
 </style>
</head>
<body>

<div id="divCenter">
 
 <h2>Logar no sistema</h2>  
<fieldset>
<form name="form1" action="login.php?valor=enviado" method="POST">
 
 
 <br>
 &nbsp <input type="text" name="login" placeholder="Login" class="txtField"><br>
 &nbsp <input type="password" name="senha" placeholder="Senha" class="txtField"><br> <br>
 &nbsp <input type="submit" value="Entrar" class='btnSubmit'>
 &nbsp <input type="Reset" value="Limpar" class='btnSubmit'>

</form>
</fieldset>
</div>

<?php
 }
?> 



 <?php
 
/*				

	
	// Testando sessões em PHP
if(isset($_REQUEST['valor']) and ($_REQUEST['valor'] == 'enviado')) { // cria sessão se usuário tiver clicado no botão enviar do formulário
 session_start();
// cria variáveis de sessão e as inicializa com os dados do formulário:
 $_SESSION['nome'] = $_POST['frm_nome'];
 $_SESSION['sobrenome'] = $_POST['frm_sobrenome'];
// exibe link para a página 02:
 echo "<a href='pg4.php'>Ir para página 2</a>";
 }
else { // Se usuário ainda não clicou no botão de enviar, mostra o formulário na página:
?>
<form name="form1" action="login.php?valor=enviado" method="POST">
 Login:
 <input type="text" name="login"><br>
 Senha:
 <input type="text" name="senha"><br>
 <input type="submit" value="Entrar">
</form>
<?php
 }
 */
?> 