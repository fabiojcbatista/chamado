<?php header("Content-type: text/html; charset=utf-8");
require_once('conexao.php');

$nome= $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel'];

$sql = "SELECT loginusuario FROM usuario WHERE loginusuario = '$login'";
$result = mysqli_query($link,$sql);

  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    cadastrarusuario.html';</script>";
 
    }else  if(mysqli_num_rows ($result) <= 0 ){
 
        $sql = "INSERT INTO USUARIO(NOMEUSUARIO,LOGINUSUARIO,SENHAUSUARIO,nivelusuario) VALUES('$nome','$login','$senha','$nivel')";
        $insert = mysqli_query($link,$sql);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='cadastrarusuario.html'</script>";
        }
      }
	  
      echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='
        cadastrarusuario.html';</script>";
	?>
