<?php header("Content-type: text/html; charset=utf-8");
require_once('funcao.php');
require_once("conexao.php");
require_once('header.php');	
require_once('menu.php');

  $id=$_SESSION['id'];

$sql = "SELECT nivelusuario from usuario where idusuario=$id";                                
		$result = mysqli_query($link,$sql)or die("Erro no banco de dados!"); 
 
		$total = mysqli_num_rows($result); 
		$dados = mysqli_fetch_array($result);  

        $nivel=$dados[0];
		
if($nivel==1)
menuadm('Novo Chamado');
else
menu('Novo Chamado'); 
 $sql = "SELECT max(idchamado) from chamado";                                
		$result = mysqli_query($link,$sql)or die("Erro no banco de dados!"); 
 
		$total = mysqli_num_rows($result); 
		$dados = mysqli_fetch_array($result);  

        $idc=$dados[0];
 $sql = "SELECT nomeusuario from usuario where idusuario=$id";                                
		$result = mysqli_query($link,$sql)or die("Erro no banco de dados!"); 
 
		$total = mysqli_num_rows($result); 
		$dados = mysqli_fetch_array($result);  

        $nome=$dados[0];
 
 if(isset($_REQUEST['acao']) and ($_REQUEST['acao'] == 'novo')) {

 
        $descricao= $_POST['descricao'] ;
        $prioridade= $_POST['prioridade'] ;		
		$id=$_SESSION['id'];
		$sql ="INSERT INTO CHAMADO ( idusuario , DESCRICAOCHAMADO, PRIORIDADECHAMADO,STATUSCHAMADO) VALUES ('$id','$descricao','$prioridade','ABERTO')";
        mysqli_query($link,$sql);
		
		$sql = "SELECT max(idchamado) from chamado";                                
		$result = mysqli_query($link,$sql)or die("Erro no banco de dados!"); 
 
		$total = mysqli_num_rows($result); 
		$dados = mysqli_fetch_array($result);  

        $idc=$dados[0];
		
		
	    $sql ="   INSERT INTO ATENDIMENTO (IDUSUARIO,IDCHAMADO,ACAOATENDIMENTO,COMENTARIOATENDIMENTO) VALUES ('$id','$idc','Abertura de chamado','system service')";
	    mysqli_query($link,$sql);
 }
?>

 <form action="novo.php?acao=novo" method="post">
		    <fieldset  style="width:400px; height:200px" >
	          <Label for="Descricao">Chamado: <?php echo $idc+1;?> 	</label></br>
			  <Label for="Descricao">Solicitante: <?php echo $nome;?> </label></br>
			  
              <Label for="Descricao">Descrever: </label>
		      <input name="descricao" type="textarea" placeholder="entrar com a descricao" class="txtField" required></br>
              <label for="prioridade">Prioridade: </label>
			  <select name="prioridade" id="itens">
				    <option value="BAIXA" selected="selected">BAIXA</option>
				    <option value="MÉDIA">MÉDIA</option>
					<option value="ALTA">ALTA</option>
				
			  </select>
			          
              <input name="criar" type="submit" value="Criar" class="btnsubmit">
		  
		    </fieldset>
       <form>


<?php


if(isset ($_POST['pesquisar'])){ // caso  seja passado o id via GET edita 
        $sql = "SELECT c.idchamado,u.nomeusuario,c.datainichamado,c.descricaochamado,c.prioridadechamado,c.statuschamado FROM chamado c inner join usuario u on c.idusuario=u.idusuario where c.idchamado=".$_POST['pesquisa']."";
    }else
$sql = "SELECT c.idchamado,u.nomeusuario,c.datainichamado,c.descricaochamado,c.prioridadechamado,c.statuschamado FROM chamado c inner join usuario u on c.idusuario=u.idusuario where statuschamado='ABERTO' OR STATUSCHAMADO='Aberto' or statuschamado='aberto'";
$result = mysqli_query($link,$sql);
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row[0]; ?></td>
<td><?php echo $row[1]; ?></td>
<td><?php echo cData($row[2]); ?></td>
<td><?php echo $row[3]; ?></td>
<td><?php echo $row[4]; ?></td>
<td><?php echo $row[5]; ?></td>
<td><a href="atendimento.php?idchamado=<?php echo $row[0]; ?>" class="link">Abrir</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</BODY>
</HTML>
