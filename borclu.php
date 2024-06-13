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
						<a href="#" style="text-decoration: none;">Hesap Bakiye</a><br>
						<a href="yonetimeyaz.php" style="text-decoration: none;">Yönetime Yaz</a></td>
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
<form id="form1" name="form1" method="post" action="giris.php">			
          <input type="submit" name="submit" id="submit" value="Yönetim Paneli" class="button">
</form>				
			<?php
				}
			?>
			
        </p></td>
        <td width="762" valign="top" align="center">	
<!--------------------------------------------------------------------------------------------------------->	
<?php 
	$bugun=date("m");

	$gun=date("d");

	switch ($bugun)
	{
		case "01":	
			$zaman=1;
			break;
		case "02":	
			$zaman=2;
			break;
		case "03":	
			$zaman=3;
			break;
		case "04":	
			$zaman=4;
			break;
		case "05":	
			$zaman=5;
			break;
		case "06":	
			$zaman=6;
			break;
		case "07":	
			$zaman=7;
			break;
		case "08":	
			$zaman=8;
			break;
		case "09":	
			$zaman=9;
			break;
		case 10:	
			$zaman=10;
			break;
		case 11:	
			$zaman=11;
			break;
		case 12:	
			$zaman=12;
			break;
		
	}
	if($gun<15)
	{
		$zaman--;
	}

	include("vt.php");	
		
	$listele=mysqli_query($baglan,"select * from sakinler_tbl order by blok, daire") or die("Listeleme Başarısız");

?>
	<center>
	<table border="1" bordercolor="#BB1C00" width="400">
	<tr><td colspan=3 align=center bgcolor="#BB1C00"><font color="white"><b>BORÇLU LİSTESİ</b></font></td></tr>
	<tr bgcolor="#BB1C00" style="color:white"><td>SIRA</td><td>BORÇLU</td><td>TUTAR</td></tr>
<?php

	$sayac=1;
	$toplam=0;
	$turkce=array("ü","ğ","ı","ş","ç","ö","Ü","Ğ","İ","Ş","Ç","Ö");
	while($oku=mysqli_fetch_assoc($listele))
	{
			$sakin=$oku["id"];
		
			$listele1=mysqli_query($baglan,"select sum(tutar) as toplam from aidat_tbl where sakin_id=".$sakin) or die("Ekleme1 Ba?arysyz");
			$listele2=mysqli_query($baglan,"select sum(tutar) as toplam from tablo_tbl where id<=".$zaman) or die("Ekleme2 Ba?arysyz");
			$bul=mysqli_fetch_assoc($listele1);
			$bul2=mysqli_fetch_assoc($listele2);
				$borc=$bul2["toplam"]-$bul["toplam"];
				if($borc>0)
				{
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
					
					echo "<tr><td>$sayac</td><td>".$ad."</td><td align=right>".$borc." <font face='Tahoma'>₺</font></td></tr>";
					$sayac++;
					$toplam+=$borc;
				}
			
	}
	
	mysqli_close($baglan);
	echo "<tr><td colspan='2'>TOPLAM</td><td align=right>$toplam <font face='Tahoma'>₺</font></td></tr></table></center>";			
?>
			
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