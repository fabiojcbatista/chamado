<?php header("Content-type: text/html; charset=utf-8");

date_default_timezone_set('America/Sao_Paulo');
$data=date("y-m-d H:i:s");

require_once('funcao.php');
require_once("conexao.php");
require_once('header.php');	
require_once('menu.php');

$id=$_SESSION['id']; 
$idc=$_GET['idchamado'];



 
 $sql = "SELECT nivelusuario from usuario where idusuario=$id";                                
		$result = mysqli_query($link,$sql)or die("Erro no banco de dados!"); 
 
		$total = mysqli_num_rows($result); 
		$dados = mysqli_fetch_array($result);  

        $nivel=$dados[0];
		
if($nivel==1)
menu_atendimentoadm('Atendimento');
else
menu_atendimento('Atendimento');

switch (get_post_action('transferir', 'fechar','abrir')) {
    case 'transferir':
        
		$comentario=$_POST['comentario'];
		$responsavel=$_POST['itens'];
		$nm=$responsavel;
		//echo "$responsavel";
		
		$sql = "SELECT idusuario from usuario where nomeusuario='$responsavel'";                                
		$result = mysqli_query($link,$sql)or die("Erro no banco de dados!"); 
 
		$total = mysqli_num_rows($result); 
		$dados = mysqli_fetch_array($result);  

        $responsavel=$dados[0];
		// echo "  $responsavel";
		$msg = "Transferiu para $nm";
		//echo "$responsavel";
		echo "$msg";
		$sql ="INSERT INTO ATENDIMENTO (IDUSUARIO,IDCHAMADO,ACAOATENDIMENTO,COMENTARIOATENDIMENTO,responsavelatendimento) VALUES ('$id','$idc','$msg','$comentario','$responsavel')";
		mysqli_query($link,$sql);
 
 
        break;

    case 'fechar':
 
	$comentario=$_POST['comentario'];
	$responsavel=$_POST['itens'];

	$sql ="UPDATE chamado
	SET statuschamado = 'Fechado',datafimchamado='$data' where
	idchamado = '$idc'";
	mysqli_query($link,$sql); 
  
	$sql =" INSERT INTO ATENDIMENTO (IDUSUARIO,IDCHAMADO,ACAOATENDIMENTO,COMENTARIOATENDIMENTO,responsavelatendimento) VALUES ('$id','$idc','Fechou o chamado','$comentario','$id')";
	mysqli_query($link,$sql);
    //fechar
        break;
	case 'abrir':
		
		$sql ="UPDATE chamado
		SET statuschamado = 'ABERTO',datafimchamado=NULL where
		idchamado = '$idc'";
		mysqli_query($link,$sql);

		$sql =" INSERT INTO ATENDIMENTO (IDUSUARIO,IDCHAMADO,ACAOATENDIMENTO,COMENTARIOATENDIMENTO) VALUES ('$id','$idc','Reabriu o chamado','System service')";
		mysqli_query($link,$sql);		
 
		break;
    default:
        //no action sent
}







//if(isset($_REQUEST['acao']) and ($_REQUEST['acao'] == 'transferir')) {
 function transferir(){

 $comentario=$_POST['comentario'];
 $responsavel=$_POST['itens'];
  echo "$responsavel";
$sql = "SELECT idusuario from usuario where nomeusuario='$responsavel'";                                
		$result = mysqli_query($link,$sql)or die("Erro no banco de dados!"); 
 
		$total = mysqli_num_rows($result); 
		$dados = mysqli_fetch_array($result);  

        $responsavel=$dados[0];
		 echo "$responsavel";
		$msg = "Transferiu para $responsavel";
 echo "$responsavel";
 echo "$msg";
 $sql ="INSERT INTO ATENDIMENTO (IDUSUARIO,IDCHAMADO,ACAOATENDIMENTO,COMENTARIOATENDIMENTO,responsavelatendimento) VALUES ('$id','$idc','$msg','$comentario','$responsavel')";
 mysqli_query($link,$sql);
 
}

//if(isset($_REQUEST['acao']) and ($_REQUEST['acao'] == 'fechar')) {
 function fechar(){

 $comentario=$_POST['comentario'];
 $responsavel=$_POST['itens'];

 $sql ="UPDATE chamado
 SET statuschamado = 'Fechado',datafimchamado='$data' where
 idchamado = '$idc'";
 mysqli_query($link,$sql); 
  
 $sql =" INSERT INTO ATENDIMENTO (IDUSUARIO,IDCHAMADO,ACAOATENDIMENTO,COMENTARIOATENDIMENTO,responsavelatendimento) VALUES ('$id','$idc','Fechou o chamado','$comentario','$id')";
 mysqli_query($link,$sql);
  
}

$sql = "SELECT c.idchamado,u.nomeusuario,c.datainichamado,c.prioridadechamado,c.descricaochamado,c.statuschamado FROM chamado c inner join usuario u on c.idusuario=u.idusuario where c.idchamado=".$idc."";
$result = mysqli_query($link,$sql);
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<table>
	 
       <form action="/Chamado/atendimento.php?idchamado=<?php echo $row[0]; ?>" method="post">
		    <fieldset  style="width:900px; height:300px" >
	          <Label for="chamado">Chamado: <?php echo $row[0]; ?>			|</label>
			  <Label for="solicitacao">Solicitante: <?php echo $row[1]; ?>			|</label>
			  <Label for="Data">Data Criação: <?php echo cdata($row[2]); ?>			|</label>
			  <label for="Prioridade">Prioridade: <?php echo $row[3]; ?>			 </label></br>
			  
			  <hr>
			  
              <Label for="Descricao">Descrição:  <?php echo $row[4]; ?></label></br>
			  <Label for="Responsável">Status:  <?php echo $row[5]; ?></label></br>
			  <?php  
			  if($row[5] == 'Fechado'){
				  
				echo '<input name="abrir" type="submit" value="Abrir" class ="btnsubmit">';  
							  
			  }
			  else {
				  
			  ?>
			  <hr>
			  <p>
			  
			  
			  
			 <!-- <Label for="comentario">Comentário</label>-->
		      <input name="comentario" type="textarea" placeholder="Entrar com o comentário" class="txtField" required>
			  <hr>             
			 <!--<label for="Transferir">Transferir para: </label>-->
	        <?php  $sql = "SELECT * from usuario";
            $result = mysqli_query($link,$sql);
            $ii=0;
            echo '<select name="itens" id="itens">
				<option value=" Transferir para" selected="selected"> </option>';
				while($row = mysqli_fetch_array($result))
				{
					echo '<option value="'.$row[1].'">'.$row[1].'</option>';
				}
			echo '</select>';
			echo '<input type="submit" name="transferir" value="Transferir">';
			echo '<input name="fechar" type="submit" value="Fechar">';
			  }
			echo '</form>';
				 
             ?>
              		 
		    </fieldset>
       <form>
	   </table>
	   <?php
$i++;
}
require_once("conexao.php");	
require_once('menu.php');
atendimento();


if(isset ($_POST['pesquisar'])){ // caso  seja passado o id via GET edita 
        $sql = "SELECT c.idchamado,u.nomeusuario,c.datainichamado,c.descricaochamado,c.prioridadechamado,c.statuschamado FROM chamado c inner join usuario u on c.idusuario=u.idusuario where c.idchamado=".$_POST['pesquisa']."";
    }else
			
$sql="SELECT A.ACAOATENDIMENTO,U.NOMEUSUARIO, C.descricaochamado, A.COMENTARIOATENDIMENTO,a.dataatendimento FROM chamado C INNER JOIN atendimento A ON C.IDCHAMADO=A.IDCHAMADO INNER JOIN usuario U ON A.IDUSUARIO=U.IDUSUARIO where a.idchamado=".$idc."";
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
<td><?php echo $row[2]; ?></td>
<td><?php echo $row[3]; ?></td>
<td><?php echo cdata($row[4]); ?></td>
</tr>
<?php
$i++;
}
?>
</table>



	   </p>
    <body>
</html>