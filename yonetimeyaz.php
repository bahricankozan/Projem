<?php
	session_start();
	if(isset($_REQUEST["tmm"])){
		$tamam=1;
	}else{
		$tamam=0;
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
          <input type="submit" name="submit" id="submit" value="Yönetim Paneli" class="button">
</form>
			
        </p></td>
        <td width="762" valign="top" align="center">
<?php
			if($tamam==0){
?>			
<form name="frm" method="post" action="kontrol.php?veri=13">
	<center>
	<table border="1" bordercolor="#BB1C00">
	<tr style="background-color:#BB1C00"><td align="center" colspan="2">YÖNETICIYE YAZ</td></tr>
	<tr>
    	  <td colspan="2" align="center"><select name="tur" style="width:150" required>
		    <option value="">Se&ccedil;iniz</option>
		    <option value="1">&#350;ikayet</option>
		    <option value="2">&Ouml;neri</option>
		    <option value="3">Durum</option>
		  </select>
          </td>
	</tr>    
    <tr><td>Ad-Soyad:</td>
    <td>
    	<input type="text" name="ad" value="" required />
    </td>
    </tr>
    <tr><td>Telefon:</td>
    <td>
    	<input type="text" name="tlf" value="" required/>
    </td>
    </tr>
    <tr><td valign="top">Mesajiniz:</td>
    <td>
    	<textarea name="msj" cols="22" rows="8" required></textarea>
    </td>
    </tr>
    <tr>
    	  <td colspan="2" align="center">
          	<input type="submit" value="GÖNDER" name="bt1"/>
          </td>
    </tr>
	</table>
</center>
</form>	
<?php 
			}else{
				echo "<fieldset><p>&nbsp;</p><center><font color='#fff' style='font-size:20px;'>Mesajınız Alınmıştır...<p> En kısa sürede dönüş yapılacaktır...<p>Teşekkür ederiz....</font></center></fieldset>";
			}
?>			
	
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