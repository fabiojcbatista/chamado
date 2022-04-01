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
menuadm('Página inicial');
else
menu('Página inicial');


 
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
