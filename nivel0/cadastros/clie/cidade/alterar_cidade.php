<?php
session_start();

include("../../../../include/arruma_link.php");
include($pontos."barra.php");
include($pontos."conexao.php");

$checa_retorno = $_SESSION["checa_retorno"];

$usuario = $_SESSION["sessao_login"];
$txt_rad_sel = $_SESSION["rad_sel"];


$sql = mysqli_query($connection, "SELECT * FROM combo_cidade WHERE codigo='$txt_rad_sel'") or print("Erro ao ler a tabela:
".mysqli_error($connection));


if ($linha = mysqli_fetch_array($sql)){

$cidade = $linha['cidade'];
}


?>
<html>
<head>
<script type="text/javascript" src="<?=$pontos;?>js/func_cad_clie.js"></script>
<script language="JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->

</script>
<?php
  if ($checa_retorno=="cad_clie"){
 echo "<body bgcolor='#FFFFFF' onUnload='javascript:window.opener.location = \"../cad_clie.php\"'>";}
  
   if ($checa_retorno=="alt_clie"){
echo "<body bgcolor='#FFFFFF' onUnload='javascript:window.opener.location = \"../cad_clie.php\"'>";}
?>

</head>
<title>Pet Livre - (Alterar cidade) </title>
<body bgcolor="#FFFFFF">
<table width="346" height="100" border="1" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td width="535" height="35" align="center" bordercolor="#66CC66" bgcolor="#66CC66"><font color="#FFFFFF"><strong>Alterar Cidade</strong></font></td>
  </tr>
  
  <tr> 
    <td width="535" height="50" align="center"> 
      <form name="frmAjax"  method="post">
        <strong><em><b><font size="2" face="Times New Roman, Times, serif">cidade</font></b><font face="Times New Roman, Times, serif"><b><font size="2">:</font></b></font>
        <input name="txt_cidade" type="text" id="txt_cidade" style="visibility:visible" size="25" maxlength="25" value="<?php echo $cidade; ?>">
&nbsp;<a href="javascript:alterar_cidade2();"><img src="../../../../imagens/cad_clie/gravar.gif" width="31" height="37" border="0" align="absmiddle"></a></em></strong>
      </form>    </td>
  </tr>
</table>
</body>
</html>