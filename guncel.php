<?php
	session_start();
	$tarih=date("Y-m-d");

			if(isset($_SESSION["kullanici"])){
					if($_SESSION["kullanici"]=="admin"){
?>
<?php 
		$id=$_REQUEST["id"];
		include("vt.php");
		
		$ara=mysqli_query($baglan, "select * from sakinler_tbl where id=$id") or die("Arama hatası...");
		if($bul=mysqli_fetch_assoc($ara)){
			$v1=$bul["blok"];
			$v2=$bul["kat"];
			$v3=$bul["daire"];
			$v4=$bul["ad"];
			$v5=$bul["tel"];
			$v6=$bul["tarih"];
		}		
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
<form id="form1" name="form1" method="post" action="giris.php">
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
						Yıllık Ödeme<br>
						Borçlu Listesi<br>
						Harcamalar<br>
						Hesap Bakiye<br>
						Gelen Mesajlar<br>
						<a href="aidatkayit.php?blok=C" style="text-decoration: none;">Aidat Kayıt</a><br>					  
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
          <input type="submit" name="submit" id="submit" value="Yönetim Paneli" class="button">
			<?php
				}
			?>
			
        </p></td>
		</form>
        <td width="762" valign="top">
			<form id="form2" name="form2" method="post" action="kontrol.php?veri=5&id=<?=$id?>">
			<table width="733" height="287" border="1" bordercolor="#BB1C00" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td colspan="2" align="center" bgcolor="#BB1C00"><strong>GÜNCELLEME PANELİ</strong></td>
              </tr>
            <tr>
              <td colspan="2"><table width="165" align="center">
                <tr>
                  <td width="157"><label>
					  <?php 
						if($v1=="A"){ 
					  ?>
                    <input name="blok" type="radio" id="blok_0" value="A" checked="checked" style="height: 20px; width: 20px;">
                    A Blok</label><label>
                    <input type="radio" name="blok" value="B" id="blok_1" style="height: 20px; width: 20px;">
					  B Blok</label>
					<?php }else if($v1=="B"){ ?>
					   <input name="blok" type="radio" id="blok_0" value="A" style="height: 20px; width: 20px;">
                    A Blok</label><label>
                    <input type="radio" name="blok" value="B" id="blok_1" checked="checked" style="height: 20px; width: 20px;">
					  B Blok</label>
				  <?php }else{echo("Blok alınamadı..");} ?>
					</td>
                </tr>
                </table></td>
              </tr>
            <tr>
              <td width="365">KAT:</td>
              <td width="362"><select name="kat" id="kat" style="height: 100%; width: 50px;">
				<option value="<?=$v2?>" selected="selected"><?=$v2?></option>
				<option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select></td>
            </tr>
            <tr>
              <td>DAİRE:</td>
              <td><select name="daire" id="daire" style="height: 100%; width: 50px;">
                <option value="<?=$v3?>" selected="selected"><?=$v3?></option>
				<option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
              </select></td>
            </tr>
            <tr>
              <td>AD-SOYAD:</td>
              <td><input type="text" name="ad" id="ad" value="<?=$v4?>" style="height: 100%;"></td>
            </tr>
            <tr>
              <td>TELEFON:</td>
              <td><input type="text" name="tel" id="tel" value="<?=$v5?>" style="height: 100%;"></td>
            </tr>
            <tr>
              <td>KAYIT TARİHİ:</td>
              <td><input type="date" name="tarih" id="tarih" value="<?=$v6?>" style="height: 100%;"></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="submit" name="submit2" id="submit2" value="GÜNCELLE" style="height: 100%; background-color: #BB1C00"; border="3px";></td>
              </tr>
          </tbody>
        </table>
		</form>
        <p>&nbsp;</p></td>
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