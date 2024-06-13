<?php
	session_start();
			if(isset($_SESSION["kullanici"])){
					if($_SESSION["kullanici"]=="admin"){
?>
<html>
<head>
<meta charset="utf-8">
<title>Apartman Yönetim Programı</title>
</head>
<style>
	.button{
		background-color: #760000;
		border:solid #BB1C00;
		width: 150px;
		height: 35px;
		color: #000000;
		font-size: 14px;
		font-style: italic;
		font-weight: bold;
		text-align: center;
		border-top-left-radius: 50px;
		border-bottom-right-radius: 50px;
		cursor: pointer;
		
	}	
</style>
<body bgcolor="#7F7E7E" link="000000" alink="#BB1C00" vlink="000000">
  <table width="960" border="0" height="100%">
    <tbody>
      <tr>
        <td colspan="2" height="200"><img src="images/riyal.jpg" width="960" height="200" alt=""/></td>
      </tr>
      <tr>
        <td width="202" align="center" valign="top">

			<table width="155" border="0" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td width="34"><img src="images/blok_bas_sol.gif" width="34" height="28" alt=""/></td>
              <td width="100%" background="images/blok_orta.gif" style="color: #AF1A00" align="center">AİDAT</td>
              <td width="34"><img src="images/blok_bas_sag.gif" width="34" height="28" alt=""/></td>
            </tr>
            <tr>
              <td colspan="3"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <td width="9" background="images/sol_orta.gif"></td>
                    <td style="color: #000000">
						<?php 
							include("menu1.php");
						?>				  						
					  </td>
                    <td width="9" background="images/sag_orta.gif"></td>
                  </tr>
                </tbody>
              </table></td>
              </tr>
            <tr>
              <td colspan="3"><img src="images/blok_alt.gif" width="155" height="20" alt=""/></td>
              </tr>
          </tbody>
        </table>
			<table width="155" border="0" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td width="34"><img src="images/blok_bas_sol.gif" width="34" height="28" alt=""/></td>
              <td width="100%" background="images/blok_orta.gif" style="color: #AF1A00" align="center">Yönetim</td>
              <td width="34"><img src="images/blok_bas_sag.gif" width="34" height="28" alt=""/></td>
            </tr>
            <tr>
              <td colspan="3"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <td width="9" background="images/sol_orta.gif"></td>
                    <td style="color: #000000">
						<a href="kayit.php" style="text-decoration: none;">Kaydetme</a><br>
						<a href="liste.php" style="text-decoration: none;">Listeleme</a><br>
						<a href="glist.php" style="text-decoration: none;">Güncelleme</a><br>
						<a href="sil.php" style="text-decoration: none;">Silme</a><br></td>
                    <td width="9" background="images/sag_orta.gif"></td>
                  </tr>
                </tbody>
              </table></td>
              </tr>
            <tr>
              <td colspan="3"><img src="images/blok_alt.gif" width="155" height="20" alt=""/></td>
              </tr>
          </tbody>
        </table>
			<a href="kontrol.php?veri=2"><img src="images/cikis.png" width="70" height="70" alt=""></a>
			
        </p></td>
        <td width="762" valign="top" align="center">	
<!--------------------------------------------------------------------------------------------------------->	
<?php			
	$gun=$_REQUEST["gnc"];

	include("vt.php");	

	$listele=mysqli_query($baglan,"select * from harcama_tbl where id=$gun") or die("Listeleme hatası");
	while($oku=mysqli_fetch_assoc($listele))
	{
		$tarih=$oku["tarih"];
		$acik=$oku["aciklama"];
		$fatura=$oku["belge"];
		$tutar=$oku["tutar"];
	}


?>

<form name="frm" method="post" action="kontrol.php?veri=21&gnc=<?=$gun;?>">
<table border="0" width="80%" cellspacing="0" cellpadding="0">
<tr><td align="center"><p>&nbsp;</p>
<table border="1" width="350" bordercolor="#BB1C00">
<tr><td colspan="2" align="center">HARCAMA KAYDETME PANELİ</td></tr>
<tr><td>TARİH</td><td><input type="date" name="tarih" value="<?=$tarih;?>" style="width: 150px;"></td></tr>
<tr><td>AÇIKLAMA</td><td><input type="text" name="acik" value="<?=$acik;?>"></td></tr>
<tr><td>FATURA</td><td><input type="text" name="belge" value="<?=$fatura;?>"></td></tr>	
<tr><td>TUTAR</td><td><input type="text" name="tutar" value="<?=$tutar;?>"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="GÜNCELLE" name="bt1"></td></tr>
</table><p>&nbsp;</p></td></tr></table>
</form>			
<!--------------------------------------------------------------------------------------------------------->		
		</td>
      </tr>
      <tr>
        <td height="25" colspan="2" background="images/alt_a.gif">&nbsp;</td>
      </tr>
      <tr>
        <td  align="center" colspan="2" height="30" background="images/alt_b.gif">&copy;Tüm hakları saklıdır.</td>
      </tr>
    </tbody>
  </table>

</body>
</html>
<?php 
					}
	}else{
		header("Location: giris.php");		
	}
?>