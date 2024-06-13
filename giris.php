<?php 
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body bgcolor="#7F7E7E">
<form id="form1" name="form1" method="post" action="kontrol.php?veri=1">
<a href="index.php"><img src="images/riyal.jpg" width="960" height="200" alt=""></a>
  <table width="500" border="3">
    <tbody>
      <tr>
        <td bgcolor="#9A1F1F" ><blockquote style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; color: #272727;">Giriş Yap</blockquote></td>
      </tr>
      <tr>
        <td><table bgcolor="#FFFFFF" width="500" border="0" cellspacing="8" cellpadding="8">
          <tbody>
            <tr>
              <td colspan="2"><input name="kuladi" type="text" id="kuladi" value="Kullanıcı Adı" onFocus="this.value='';" style="font-size= 14px; font-style: italic; font-weight: bold; background-color: #FBB9BA;  width: 500px; height: 30px; padding-left: 15px; color: #8E0000; border-radius: 15px;" ></td>
              </tr>
            <tr>
              <td colspan="2"><input type="text" name="sifre" id="sifre" value="Şifre" onFocus="this.value='';this.type='password';" style="font-size= 14px; font-style: italic; font-weight: bold; background-color: #FBB9BA;  width: 500px; height: 30px; padding-left: 15px; color: #8E0000; border-radius: 15px;" ></td>
              </tr>
            <tr>
              <td width="250">&nbsp;</td>
              <td width="210"><input type="submit" name="submit" id="submit" align="middle" value="Sisteme Giriş" style="font-size: 14px; font-style: italic; font-weight: bold; background: #9A1F1F; width: 150px; height: 35px; padding-left: 15px; color: #272727; border-radius: 15px; cursor: pointer;"></td>
              </tr>
          </tbody>
        </table></td>
      </tr>
    </tbody>
  </table>
<p><center>
<?php
	if(isset($_SESSION["msj"])){
		echo $_SESSION["msj"];
	}
	$_SESSION["msj"]="";
?></center></p>
</form>
</body>
</html>