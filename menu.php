<?php header("Content-type: text/html; charset=utf-8");
require_once("conexao.php");	
        
		
	    //session_start();
				

function menu($Titulo){
		

echo "
<HTML>
<head>
<title>$Titulo</title>
<link rel='stylesheet' type='text/css' href='styles.css' />
</head>
<BODY>

<table>
<tr>
<form action='/Chamado/home.php' method='post'>
<td><input type='submit' value='Home' name='home' class='btnSubmit'></td>
</form>
<form action='/Chamado/novo.php' method='post'>
<td><input type='submit' value='Novo' name='novo' class='btnSubmit'></td>
</form>
<form action='/Chamado/todos.php' method='post'>
<td><input type='submit' value='Todos' name='Todos' class='btnSubmit'></td>
</form>
<form action='/Chamado/fechado.php' method='post'>
<td><input type='submit' value='Fechado' name='Fechado' class='btnSubmit'></td>
</form>
<form action='/Chamado/minhafila.php' method='post'>
<td><input type='submit' value='Fila' name='Minha Fila' class='btnSubmit'></td>
</form>
<form action='/Chamado/responsavel.php' method='post'>
<td><input type='submit' value='Solicitado' name='Minha Fila' class='btnSubmit'></td>
</form>
<form action='/concurso/home.php' method='post'>
<td><input type='submit' value='Concurso' name='concurso' class='btnSubmit'></td>
</form>
<form action='/Chamado/login.php' method='post'>
<td><input type='submit' value='Login' name='login' class='btnSubmit'></td>
</form>


</tr>
</table>
<HR width='100%' size='5' color='black' />
<p></p>

<form action=# method='post'>
<input type='text' name='pesquisa' class='txtfield' required>
<input type='submit' name='pesquisar' value='Pesquisar'>
</form>
</table>
<HR width='100%' size='5' color='black' />

<table border='0' cellpadding='10' cellspacing='1' width='100%' class='tblListForm'>
<tr class='listheader'>
<th>Chamado</th>
<th><label>Solicitante</label></th>
<th><label>Data de Criação</label></th>
<th><label>Descrição</label></th>
<th><label>Prioridade</label></th>
<th><label>Status</label></th>
<th><label>Ação</label></th>
</tr>



";
return true;
}
function menuAdm($Titulo){

echo "
<HTML>
<head>
<title>$Titulo</title>
<link rel='stylesheet' type='text/css' href='styles.css' />
</head>
<BODY>

<table>
<tr>
<form action='/Chamado/home.php' method='post'>
<td><input type='submit' value='Home' name='home' class='btnSubmit'></td>
</form>
<form action='/Chamado/cadastrarusuario.html' method='post'>
<td><input type='submit' value='Cadastrar' name='cadastrar' class='btnSubmit'></td>
</form>
<form action='/Chamado/novo.php' method='post'>
<td><input type='submit' value='Novo' name='novo' class='btnSubmit'></td>
</form>
<form action='/Chamado/todos.php' method='post'>
<td><input type='submit' value='Todos' name='Todos' class='btnSubmit'></td>
</form>
<form action='/Chamado/fechado.php' method='post'>
<td><input type='submit' value='Fechado' name='Fechado' class='btnSubmit'></td>
</form>
<form action='/Chamado/minhafila.php' method='post'>
<td><input type='submit' value='Fila' name='Minha Fila' class='btnSubmit'></td>
</form>
<form action='/Chamado/responsavel.php' method='post'>
<td><input type='submit' value='Solicitado' name='Minha Fila' class='btnSubmit'></td>
</form>
<form action='/concurso/home.php' method='post'>
<td><input type='submit' value='Concurso' name='concurso' class='btnSubmit'></td>
</form>
<form action='/Chamado/login.php' method='post'>
<td><input type='submit' value='Login' name='login' class='btnSubmit'></td>
</form>

</tr>
</table>
<HR width='100%' size='5' color='black' />
<p></p>

<form action=# method='post'>
<input type='text' name='pesquisa' class='txtfield' required>
<input type='submit' name='pesquisar' value='Pesquisar'>
</form>
</table>
<HR width='100%' size='5' color='black' />

<table border='0' cellpadding='10' cellspacing='1' width='100%' class='tblListForm'>
<tr class='listheader'>
<th>Chamado</th>
<th><label>Solicitante</label></th>
<th><label>Data de Criação</label></th>
<th><label>Descrição</label></th>
<th><label>Prioridade</label></th>
<th><label>Status</label></th>
<th><label>Ação</label></th>
</tr>



";
return true;
}
function Atendimento(){
echo "
<HTML>
<head>
<title>Atendimento</title>
<link rel='stylesheet' type='text/css' href='styles.css' />
</head>

<BODY>
</table>
 <HR width='100%' size='5' color='black' />

<table border='0' cellpadding='10' cellspacing='1' width='100%' class='tblListForm'>
<tr class='listheader'>
<th><label>Ação</label></th>
<th><label>Responsável</label></th>
<th><label>Descrição</label></th>
<th><label>Comentário</label></th>
<th><label>Data</label></th>
</tr>

";
	
	return true;
}
function menu_atendimento($Titulo){
	

echo "
<HTML>
<HEAD>
<TITLE>$Titulo</TITLE>
<link rel='stylesheet' type='text/css' href='styles.css' />
</head>

<BODY>

<table>
<tr>
<form action='/Chamado/home.php' method='post'>
<td><input type='submit' value='Home' name='home' class='btnSubmit'></td>
</form>
<form action='/Chamado/novo.php' method='post'>
<td><input type='submit' value='Novo' name='novo' class='btnSubmit'></td>
</form>
<form action='/Chamado/todos.php' method='post'>
<td><input type='submit' value='Todos' name='Todos' class='btnSubmit'></td>
</form>
<form action='/Chamado/fechado.php' method='post'>
<td><input type='submit' value='Fechado' name='Fechado' class='btnSubmit'></td>
</form>
<form action='/Chamado/minhafila.php' method='post'>
<td><input type='submit' value='Fila' name='Minha Fila' class='btnSubmit'></td>
</form>
<form action='/Chamado/responsavel.php' method='post'>
<td><input type='submit' value='Solicitado' name='Minha Fila' class='btnSubmit'></td>
</form>
<form action='/concurso/home.php' method='post'>
<td><input type='submit' value='Concurso' name='concurso' class='btnSubmit'></td>
</form>
<form action='/Chamado/login.php' method='post'>
<td><input type='submit' value='Login' name='login' class='btnSubmit'></td>
</form>

</tr>
</table>
 <HR width='100%' size='5' color='black' />
<p></p>";
}
function menu_atendimentoAdm($Titulo){
	

echo "
<HTML>
<HEAD>
<TITLE>$Titulo</TITLE>
<link rel='stylesheet' type='text/css' href='styles.css' />
</head>

<BODY>

<table>
<tr>
<form action='/Chamado/home.php' method='post'>
<td><input type='submit' value='Home' name='home' class='btnSubmit'></td>
</form>
<form action='/Chamado/cadastrarusuario.html' method='post'>
<td><input type='submit' value='Cadastrar' name='cadastrar' class='btnSubmit'></td>
</form>
<form action='/Chamado/novo.html' method='post'>
<td><input type='submit' value='Novo' name='novo' class='btnSubmit'></td>
</form>
<form action='/Chamado/todos.php' method='post'>
<td><input type='submit' value='Todos' name='Todos' class='btnSubmit'></td>
</form>
<form action='/Chamado/fechado.php' method='post'>
<td><input type='submit' value='Fechado' name='Fechado' class='btnSubmit'></td>
</form>
<form action='/Chamado/minhafila.php' method='post'>
<td><input type='submit' value='Fila' name='Minha Fila' class='btnSubmit'></td>
</form>
<form action='/Chamado/responsavel.php' method='post'>
<td><input type='submit' value='Solicitado' name='Minha Fila' class='btnSubmit'></td>
</form>
<form action='/concurso/home.php' method='post'>
<td><input type='submit' value='Concurso' name='concurso' class='btnSubmit'></td>
</form>
<form action='/Chamado/login.php' method='post'>
<td><input type='submit' value='Login' name='login' class='btnSubmit'></td>
</form>

</tr>
</table>
 <HR width='100%' size='5' color='black' />
<p></p>";
}
function get_post_action($name){
    $params = func_get_args();

    foreach ($params as $name) {
        if (isset($_POST[$name])) {
            return $name;
        }
    }
}

?>