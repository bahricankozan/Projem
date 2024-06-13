<?php
	session_start();
$tarih=date('Y-m-d');
include("vt.php");
	if(isset($_SESSION["kullanici"]) && $_SESSION["kullanici"]=="admin"){
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
	
<script language="javascript">
	function gonder(x)
	{
		window.location.href="aidatkayit.php?blok="+x;
	}
</script>	
	
<body bgcolor="#7F7E7E" link="000000" alink="#BB1C00" vlink="000000">
  <table width="960" border="0" height="100%">
    <tbody>
      <tr>
        <td colspan="2" height="200"><img src="images/riyal.jpg" width="960" height="200" alt=""/></td>
      </tr>
      <tr>
        <td width="202" align="center" valign="top">
			<?php 
			if(isset($_SESSION["kullanici"])){
					if($_SESSION["kullanici"]=="admin"){
			?> 
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
			<?php		
				}
				}
				else{
			?>
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
                    <td style="color: #000000">Yıllık Ödeme<br>Borçlu Listesi<br>Harcamalar<br>Hesap Bakiye<br>Yönetime Yaz</td>
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
          <input type="submit" name="submit" id="submit" value="Yönetim Paneli" class="button">
			<?php
				}
			?>
			
        </p></td>
        
	<td width="760" align="center" valign="top">
    <form id="form2" name="form2" method="post" action="kontrol.php?veri=6">
      <br />
      <table border="1" width="381" bordercolor="dark">
        <tr>
          <td colspan="2" align="center">AİDAT KAYDETME PANELİ</td>
        </tr>
        <tr>
          <td colspan="2" align="center"><?php
	$gelen=$_REQUEST["blok"];
	
	if($gelen=="C")
	{
?>
            <input type="radio" name="blok" value="A" onclick="gonder('A')" />
            A BLOK
            <input type="radio" name="blok" value="B" onclick="gonder('B')" />
            B BLOK
            <?php
	}
	if($gelen=="A")
	{
?>
            <input type="radio" name="blok" value="A" checked="checked" onclick="gonder('A')" />
            A BLOK
            <input type="radio" name="blok" value="B" onclick="gonder('B')" />
            B BLOK
            <?php
	}
	if($gelen=="B")
	{
?>
            <input type="radio" name="blok" value="A" onclick="gonder('A')" />
            A BLOK
            <input type="radio" name="blok" value="B" checked="checked" onclick="gonder('B')" />
            B BLOK
            <?php
	}
?></td>
        </tr>
        <tr>
          <td>AD-SOYAD:</td>
          <td><select name="adsoy" style="width:172">
            <?php
	if($gelen=="C")
	{
		echo "<option value='0'>BLOK SEÇ</option>";
	}
	else
	{	
		$bul=mysqli_query($baglan, "select * from sakinler_tbl where blok='".$gelen."' order by daire") or die("Kayıt Bulunamadı");

		while ($ara=mysqli_fetch_assoc($bul))
		{
			echo "<option value='".$ara["id"]."'>".$ara["ad"]."</option>";
		}
		mysqli_close($baglan);		
	}
?>
          </select></td>
        </tr>
        <tr>
          <td>TUTAR:</td>
          <td><input type="text" name="tutar" value="" /></td>
        </tr>
        <tr>
          <td>KAYIT TARİHİ:</td>
          <td><input name="kaytar" type="date" value="<?=$tarih;?>" /></td>
        </tr>
        <tr>
          <td>HANG&#304; AY &#304;&Ccedil;&#304;N:</td>
          <td><label for="aylar"></label>
            <select name="aylar" id="aylar">
              <option value="0" selected="selected">BORÇ</option>
              <option value="1">OCAK</option>
              <option value="2">&#350;UBAT</option>
              <option value="3">MART</option>
              <option value="4">N&#304;SAN</option>
              <option value="5">MAYIS</option>
              <option value="6">HAZ&#304;RAN</option>
              <option value="7">TEMMUZ</option>
              <option value="8">A&#286;USTOS</option>
              <option value="9">EYL&Uuml;L</option>
              <option value="10">EK&#304;M</option>
              <option value="11">KASIM</option>
              <option value="12">ARALIK</option>
            </select></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" value="KAYDET" name="bt2" /></td>
        </tr>
      </table>
    </form>      <br /></td>
	
      </tr>
      <tr>
        <td height="25" colspan="2" background="images/alt_a.gif">&nbsp;</td>
      </tr>
      <tr>
        <td  align="center" colspan="2" height="30" background="images/alt_b.gif">&copy;Tüm hakları saklıdır. </td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>
<?php 
	}
	else{
		header("Location: giris.php");		
	}

?>