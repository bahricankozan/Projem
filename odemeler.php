<?php
	session_start();
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
                    <td style="color: #000000">
						<a href="odemeler.php" style="text-decoration: none;">Yıllık Ödeme</a><br>
						<a href="borclu.php" style="text-decoration: none;">Borçlu Listesi</a><br>
						<a href="harcama.php" style="text-decoration: none;">Harcamalar</a><br>
						<a href="hesap.php" style="text-decoration: none;">Hesap Bakiye</a><br>
						<a href="yonetimeyaz.php" style="text-decoration: none;">Yönetime Yaz</a>
											  
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
        </table><p>&nbsp;</p>
          <input type="submit" name="submit" id="submit" value="Yönetim Paneli" class="button">
			<?php
				}
			?>
			
        </p></td>
        <td width="762" valign="top"><table width="650" border="1" bordercolor="#BB1C00" cellspacing="0" cellpadding="0">
          <tbody>
            <tr bgcolor="#BB1C00">
              <td>SIRA</td>
              <td>BLOK-DAİRE</td>
              <td>ADI-SOYADI</td>
              <td style="writing-mode: vertical-rl; text-orientation: mixed;">OCAK</td>
              <td style="writing-mode: vertical-rl; text-orientation: mixed;">ŞUBAT</td>
              <td style="writing-mode: vertical-rl; text-orientation: mixed;">MART</td>
              <td style="writing-mode: vertical-rl; text-orientation: mixed;">NİSAN</td>
              <td style="writing-mode: vertical-rl; text-orientation: mixed;">MAYIS</td>
              <td style="writing-mode: vertical-rl; text-orientation: mixed;">HAZİRAN</td>
              <td style="writing-mode: vertical-rl; text-orientation: mixed;">TEMMUZ</td>
              <td style="writing-mode: vertical-rl; text-orientation: mixed;">AĞUSTOS</td>
              <td style="writing-mode: vertical-rl; text-orientation: mixed;">EYLÜL</td>
              <td style="writing-mode: vertical-rl; text-orientation: mixed;">EKİM</td>
              <td style="writing-mode: vertical-rl; text-orientation: mixed;">KASIM</td>
              <td style="writing-mode: vertical-rl; text-orientation: mixed;">ARALIK</td>
            </tr>
			  <?php 
			  	include("vt.php");
			  	
			  	$listele=mysqli_query($baglan, "select * from sakinler_tbl order by blok, kat") or die("Listeleme kodu hatalı...");
			 	$s=1;
			  	$turkce=array("ü","ğ","ı","ş","ç","ö","Ü","Ğ","İ","Ş","Ç","Ö");			  
			  	while($oku=mysqli_fetch_assoc($listele)){
					
					$ad="";
					$isim=$oku["ad"];
					$desen="/ /u"; 						
					$sonuc=preg_split($desen,$isim);
					foreach($sonuc as $elm){
						$deger=$elm;
						$sayi=1;
						$say=mb_strlen($deger,"utf8");

						$ilk2=mb_substr($deger,0,2,"utf8");						
						$say-=2;
						$parca=$ilk2.str_repeat("*",$say);
						$ad.=$parca." ";
					}					
					
					echo "<tr><td>$s</td><td>".$oku["blok"]."".$oku["daire"]."</td><td>$ad</td>";
					
					$ara=mysqli_query($baglan, "select * from odemeler_tbl where sakin=".$oku["id"]);
					if($bul=mysqli_fetch_assoc($ara)){
						if($bul["ay1"]==1){
							echo "<td align='center'><img src='images/tmm.png' width='20' height='20'></td>";
						}else{
							echo "<td align='center'><img src='images/yok.png' width='20' height='20'></td>";
						}
						if($bul["ay2"]==1){
							echo "<td align='center'><img src='images/tmm.png' width='20' height='20'></td>";
						}else{
							echo "<td align='center'><img src='images/yok.png' width='20' height='20'></td>";
						}
						if($bul["ay3"]==1){
							echo "<td align='center'><img src='images/tmm.png' width='20' height='20'></td>";
						}else{
							echo "<td align='center'><img src='images/yok.png' width='20' height='20'></td>";
						}
						if($bul["ay4"]==1){
							echo "<td align='center'><img src='images/tmm.png' width='20' height='20'></td>";
						}else{
							echo "<td align='center'><img src='images/yok.png' width='20' height='20'></td>";
						}
						if($bul["ay5"]==1){
							echo "<td align='center'><img src='images/tmm.png' width='20' height='20'></td>";
						}else{
							echo "<td align='center'><img src='images/yok.png' width='20' height='20'></td>";
						}
						if($bul["ay6"]==1){
							echo "<td align='center'><img src='images/tmm.png' width='20' height='20'></td>";
						}else{
							echo "<td align='center'><img src='images/yok.png' width='20' height='20'></td>";
						}
						if($bul["ay7"]==1){
							echo "<td align='center'><img src='images/tmm.png' width='20' height='20'></td>";
						}else{
							echo "<td align='center'><img src='images/yok.png' width='20' height='20'></td>";
						}
						if($bul["ay8"]==1){
							echo "<td align='center'><img src='images/tmm.png' width='20' height='20'></td>";
						}else{
							echo "<td align='center'><img src='images/yok.png' width='20' height='20'></td>";
						}
						if($bul["ay9"]==1){
							echo "<td align='center'><img src='images/tmm.png' width='20' height='20'></td>";
						}else{
							echo "<td align='center'><img src='images/yok.png' width='20' height='20'></td>";
						}
						if($bul["ay10"]==1){
							echo "<td align='center'><img src='images/tmm.png' width='20' height='20'></td>";

						}else{
							echo "<td align='center'><img src='images/yok.png' width='20' height='20'></td>";
						}
						if($bul["ay11"]==1){
							echo "<td align='center'><img src='images/tmm.png' width='20' height='20'></td>";
						}else{
							echo "<td align='center'><img src='images/yok.png' width='20' height='20'></td>";
						}
						if($bul["ay12"]==1){
							echo "<td align='center'><img src='images/tmm.png' width='20' height='20'></td>";
						}else{
							echo "<td align='center'><img src='images/yok.png' width='20' height='20'></td>";
						}
					}
					
					echo "</tr>";
					$s++;
				}
			  	mysqli_close($baglan);
			  ?>
          </tbody>
        </table></td>
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