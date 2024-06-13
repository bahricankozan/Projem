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
						<a href="hesap.php" style="text-decoration: none;">Hesap Bakiye</a><br>
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
			
			<script language="javascript">
			function sil(x){
				var durum=confirm("Seçilen harcama kaydı silinecektir. Emin misiniz?");
				if(durum==1){
					window.location.href="kontrol.php?veri=20&sil="+x;
				}
			}
			</script>			
<?php 
			
	$bugun=date("m");
	$gun=date("d");
	include("vt.php");	
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

	if($_POST)
	{
			
		$yil=mysqli_real_escape_string($baglan,$_POST["yillar"]);
		$goster=mysqli_real_escape_string($baglan,$_POST["liste"]);
		
			switch ($goster)
		{
		case "30":	
			$secim="SON 30 KAYIT";
			break;
		case "0":	
			$secim="TÜM HARCAMALAR";
			break;
		case "1":	
			$secim="OCAK AYI";
			break;						
		case "2":	
			$secim="SUBAT AYI";
			break;
		case "3":	
			$secim="MART AYI";
			break;
		case "4":	
			$secim="NISAN AYI";
			break;
		case "5":	
			$secim="MAYIS AYI";
			break;
		case "6":	
			$secim="HAZIRAN AYI";
			break;
		case "7":	
			$secim="TEMMUZ AYI";
			break;
		case "8":	
			$secim="AGUSTOS AYI";
			break;
		case "9":	
			$secim="EYLÜL AYI";
			break;
		case "10":	
			$secim="EKIM AYI";
			break;
		case "11":	
			$secim="KASIM AYI";
			break;
		case "12":	
			$secim="ARALIK AYI";
			break;	
		}
	}
	

	
	$listele=mysqli_query($baglan, "select YEAR(tarih) as tar from harcama_tbl group by YEAR(tarih) desc") or die("Listeleme Basarisiz");
?>
	<center>
		<script language="javascript">
		function detay(x){
			document.getElementById("resim").src="fatura/"+x;
			document.getElementById("preloader").style.display="block";
		}
		function detaykapa(){
			document.getElementById("preloader").style.display="none";
		}
		</script>
					
	<div id="preloader" style="display: none;  
  position: fixed;
  z-index: 1;  
  left: 0; 
  right: 0;
  padding: 20px;
  top: 0; 
  opacity: 1;  									  
  bottom: 0;
  margin: auto;
  width: 70%;
  height: 700px;
  overflow: auto;
  z-index: 20;
  background-color: rgba(35, 35, 35, 0.9);
  border: 1px solid rgba(0, 0, 0, 0.4);
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  -moz-box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
  -webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
  text-shadow: 1px 1px 8px rgba(0, 0, 0, 0.6);
  -moz-transform-style: preserve-3D;
  -webkit-transform-style: preserve-3D;
  transform-style: preserve-3D;
  backface-visibility: hidden;
  transition: all 0.5s ease;">
		  
  <div>
    <div style="padding-left: 15px; color: #fff;background-color: #00c8da;float: left; height: 25px;">HARCAMAYA AİT FİŞ/FATURA/ÖDEME BELGESİ</div>
    <div style="color: navy;background-color: #00c8da; height: 25px;" align="right"><img src="images/sil.png" width="20" height="20" onClick="detaykapa()" style="cursor: pointer;"></div>
  </div>
		<img src="" id="resim" height="100%">
		
	</div>	
			
		
    <form name="harc" method="post" action="harcama.php">
	<table border="1" bordercolor="#BB1C00" width="700">
	<tr><td colspan="6" align=center bgcolor="#BB1C00" height="100">
		<select name="yillar" style="font-size:20px;">
<?php
		if(isset($yil))
		{
			echo "<option value='$yil' selected>$yil</option>";			
		}
	while($oku=mysqli_fetch_assoc($listele))
	{
		echo "<option value='".$oku["tar"]."'>".$oku["tar"]."</option>";
	}

?>
		</select>
        <select name="liste" onchange="submit()" style="font-size:20px;">
<?php
		if(isset($goster))
		{
			echo "<option value='$goster' selected>$secim</option>";			
		}		
?>
        	<option value="30">SON 30 KAYIT</option>
        	<option value="0">TÜM HARCAMALAR</option>
        	<option value="1">OCAK AYI</option>
        	<option value="2">SUBAT AYI</option>
        	<option value="3">MART AYI</option>
        	<option value="4">NISAN AYI</option>
        	<option value="5">MAYIS AYI</option>
        	<option value="6">HAZIRAN AYI</option>
        	<option value="7">TEMMUZ AYI</option>
        	<option value="8">AGUSTOS AYI</option>
        	<option value="9">EYLÜL AYI</option>
        	<option value="10">EKIM AYI</option>
        	<option value="11">KASIM AYI</option>
        	<option value="12">ARALIK</option>                                
        </select>
	</td></tr>
	
<?php		
		if (isset($_SESSION["kullanici"]))
		{
    		echo "<tr bgcolor='#BB1C00' style='color:white'><td width='100'>TARİH</td><td width='200'>AÇIKLAMA</td><td width='100'>FİŞ-FATURA</td><td width='100'>TUTAR</td><td width='40'>GNC</td><td width='40'>SİL</td>";
		}else{
    		echo "<tr bgcolor='#BB1C00' style='color:white'><td width='100'>TARİH</td><td width='200'>AÇIKLAMA</td><td width='100'>FİŞ-FATURA</td><td>TUTAR</td>";
		}
		echo "</tr>";
	
	if(isset($goster))
	{
		if($goster==30)
		{
			$listele=mysqli_query($baglan, "select * from harcama_tbl where YEAR(tarih)='$yil' order by tarih desc LIMIT 30") or die("Listeleme Başarısız");
		}
		else if($goster==0)
		{
			$listele=mysqli_query($baglan, "select * from harcama_tbl where YEAR(tarih)='$yil' order by tarih, desc ") or die("Listeleme Başarısız");
		}
		else
		{
			$listele=mysqli_query($baglan, "select * from harcama_tbl where YEAR(tarih)='$yil' and MONTH(tarih)='$goster' order by tarih desc ") or die("Listeleme Başarısız");			
		}
	}
	else
	{
		$listele=mysqli_query($baglan, "select * from harcama_tbl order by tarih desc, aciklama ASC LIMIT 30") or die("Listeleme Başarısız");	
	}
	while($oku=mysqli_fetch_assoc($listele))
	{
		$bugun=$oku["tarih"];
		$objDateTime = new DateTime($bugun);
		$tarih=$objDateTime->format('d.m.Y');
		
		if (isset($_SESSION["kullanici"]))
		{
			echo "<tr><td>".$tarih."</td><td width='250'>".$oku["aciklama"]."</td><td width='200'><div style='float:left;width:150px;'>".$oku["belge"]."</div>";
			if($oku["resim"]!=""){
				echo "<div style='float:left;'><a href=javascript:detay('".$oku["resim"]."')><img src='images/detay.png' width='30' height='30'></a></div>";
			}
			echo "</td><td align=right>".number_format($oku["tutar"],"2",",",".")." <font face='Tahoma'>₺</font></td><td align=center><a href='harcaguncel.php?gnc=".$oku["id"]."'><img src='images/gerial.png' width='20' height='20'></a></td><td align=center><a href='javascript:sil(".$oku["id"].")'><img src='images/sil.png' width='20' height='20'></a></td></tr>";
		}
		else
		{
			echo "<tr><td>".$tarih."</td><td width='250'>".$oku["aciklama"]."</td><td width='200'><div style='float:left;width:150px;'>".$oku["belge"]."</div>";
			if($oku["resim"]!=""){
				echo "<div style='float:left;'><a href=javascript:detay('".$oku["resim"]."')><img src='images/detay.png' width='30' height='30'></a></div>";
			}
			echo "</td><td align=right>".number_format($oku["tutar"],"2",",",".")." TL</td></tr>";			
		}
	}
	
	mysqli_close($baglan);
	echo "</table></center>";			
			
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
