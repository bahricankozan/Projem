<?php 
		session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
	<?php 
		$g=$_REQUEST["veri"];
		include("vt.php");
	
	if($g==1){
		$kuladi=$_POST["kuladi"];
		$sifre=$_POST["sifre"];
		
		$ara=mysqli_query($baglan, "select * from kullanici_tbl where k_adi='$kuladi' and k_sifre='$sifre'") or die("Arama başarısız....");
		
		if($bul=mysqli_fetch_assoc($ara)){
			$_SESSION["kullanici"]=$bul["k_adi"];
			mysqli_close($baglan);
			header("Location: index.php");
		}
		else{
			$_SESSION["msj"]="Kullanıcı adınız veya şifreniz hatalı......";
			mysqli_close($baglan);
			header("Location: giris.php");
		}
	}
	
	if($g==2){
		session_destroy();
		mysqli_close($baglan);
		header("Location: index.php");
	}
	if($g==3){
		$blok=$_POST["blok"];
		$kat=$_POST["kat"];
		$daire=$_POST["daire"];
		$ad=$_POST["ad"];
		$tel=$_POST["tel"];
		$tarih=$_POST["tarih"];
		
		
		mysqli_query($baglan, "insert into sakinler_tbl (blok,kat,daire,ad,tel,tarih) values ('$blok', $kat, $daire, '$ad', '$tel', '$tarih')") or die("Kayıt satırı hatalı....");
		
		$sonid=mysqli_insert_id($baglan);
		
		mysqli_query($baglan, "insert into odemeler_tbl (sakin) value($sonid)");
		
		mysqli_close($baglan);
		header("Location: kayit.php");
	}
	if($g==4){
		$sil=$_REQUEST["sil"];
		
		mysqli_query($baglan, "delete from sakinler_tbl where id=$sil");
		mysqli_query($baglan, "delete from odemeler_tbl where sakin=$sil");
		
		mysqli_close($baglan);
		header("Location: sil.php");
	}
	if($g==5){
		$id=$_REQUEST["id"];
		
		$blok=$_POST["blok"];
		$kat=$_POST["kat"];
		$daire=$_POST["daire"];
		$ad=$_POST["ad"];
		$tel=$_POST["tel"];
		$tarih=$_POST["tarih"];
		
		mysqli_query($baglan, "update sakinler_tbl set blok='$blok', kat='$kat', daire='$daire', ad='$ad', tel='$tel', tarih='$tarih' where id='$id'") or die("Güncelleme hatası...");
		
		mysqli_close($baglan);
		header("Location: glist.php");
	}
	
	if($g==6)
	{
		$v1=$_POST["adsoy"];
		$v2=$_POST["tutar"];
		$v3=$_POST["kaytar"];
		$v4=$_POST["aylar"];						  			
		
		$kim=mysqli_query($baglan, "select * from sakinler_tbl where id=$v1");
		$bul=mysqli_fetch_assoc($kim);		

		mysqli_query($baglan, "insert aidat_tbl (sakin_id, sakin, tutar, tarih, ay) values($v1,'".$bul["ad"]."',$v2,'$v3',$v4)") or die ("Kayıt baþarısız...");
		
		mysqli_query($baglan, "update odemeler_tbl set ay$v4=1 where sakin=$v1");
		
		mysqli_close($baglan);
		header('Location: aidatkayit.php?blok=C');	
	}	
	if($g==7){
		$g1=mysqli_real_escape_string($baglan, $_POST["ay1"]);
		$g2=mysqli_real_escape_string($baglan, $_POST["ay2"]);
		$g3=mysqli_real_escape_string($baglan, $_POST["ay3"]);
		$g4=mysqli_real_escape_string($baglan, $_POST["ay4"]);
		$g5=mysqli_real_escape_string($baglan, $_POST["ay5"]);
		$g6=mysqli_real_escape_string($baglan, $_POST["ay6"]);
		$g7=mysqli_real_escape_string($baglan, $_POST["ay7"]);
		$g8=mysqli_real_escape_string($baglan, $_POST["ay8"]);
		$g9=mysqli_real_escape_string($baglan, $_POST["ay9"]);
		$g10=mysqli_real_escape_string($baglan, $_POST["ay10"]);
		$g11=mysqli_real_escape_string($baglan, $_POST["ay11"]);
		$g12=mysqli_real_escape_string($baglan, $_POST["ay12"]);
		
		mysqli_query($baglan, "update tablo_tbl set tutar=".$g1." where id=1") or die("Güncelleme olmadı");
		mysqli_query($baglan, "update tablo_tbl set tutar=".$g2." where id=2") or die("Güncelleme olmadı");
		mysqli_query($baglan, "update tablo_tbl set tutar=".$g3." where id=3") or die("Güncelleme olmadı");
		mysqli_query($baglan, "update tablo_tbl set tutar=".$g4." where id=4") or die("Güncelleme olmadı");
		mysqli_query($baglan, "update tablo_tbl set tutar=".$g5." where id=5") or die("Güncelleme olmadı");
		mysqli_query($baglan, "update tablo_tbl set tutar=".$g6." where id=6") or die("Güncelleme olmadı");
		mysqli_query($baglan, "update tablo_tbl set tutar=".$g7." where id=7") or die("Güncelleme olmadı");
		mysqli_query($baglan, "update tablo_tbl set tutar=".$g8." where id=8") or die("Güncelleme olmadı");
		mysqli_query($baglan, "update tablo_tbl set tutar=".$g9." where id=9") or die("Güncelleme olmadı");
		mysqli_query($baglan, "update tablo_tbl set tutar=".$g10." where id=10") or die("Güncelleme olmadı");
		mysqli_query($baglan, "update tablo_tbl set tutar=".$g11." where id=11") or die("Güncelleme olmadı");
		mysqli_query($baglan, "update tablo_tbl set tutar=".$g12." where id=12") or die("Güncelleme olmadı");
		mysqli_close($baglan);
		header('Location: aidattablo.php');		
	}
	if($g==13)
	{

		$v1=mysqli_real_escape_string($baglan, $_POST["tur"]);
		$v2=mysqli_real_escape_string($baglan, $_POST["ad"]);
		$v3=mysqli_real_escape_string($baglan, $_POST["tlf"]);
		$v4=mysqli_real_escape_string($baglan, $_POST["msj"]);
		$v5=date("Y.m.d");

		mysqli_query($baglan, "insert into mesaj_tbl (tur, adsoy, tel, msj,tarih) values('$v1','$v2','$v3','$v4','$v5')") or die ("Kayıt başarısız...");
		mysqli_close($baglan);
		header('Location: yonetimeyaz.php?tmm');	
	}	
	if($g==14)
	{
		$silinecek=$_REQUEST["id"];
		mysqli_query($baglan, "delete from mesaj_tbl where id=$silinecek") or die ("Silme başarısız...");
		mysqli_close($baglan);
		header('Location: mesajlar.php');
	}	
	
	
	if($g==15)
	{
		$v1=$_POST["tarih"];
		$v2=mysqli_real_escape_string($baglan, $_POST["acik"]);
		$v3=mysqli_real_escape_string($baglan, $_POST["tutar"]);
		$v4=mysqli_real_escape_string($baglan, $_POST["belge"]);
		$v3=preg_replace("/,/",".",$v3);
			
			$resim=$_FILES["dosya"];
			move_uploaded_file($resim["tmp_name"],$resim["name"]);
			$dizi=explode(".",$resim["name"]);
			$uzanti=end($dizi);
			
			$x1=rand(1,9999);
			$x2=rand(1,9999);
			
			copy($resim["name"],"fatura/fat$x1$x2.$uzanti");
			unlink($resim["name"]);

		mysqli_query($baglan, "insert into harcama_tbl (tarih, aciklama, tutar, belge, resim) values('$v1','$v2',$v3,'$v4', 'fat$x1$x2.$uzanti')") or die ("Kayıt başarısız...");
		mysqli_close($baglan);
		header('Location: harcakayit.php');	
	}	
	
	if($g==16)
	{

	
	}	
	
	if($g==20)
	{
		$silinecek=$_REQUEST["sil"];
		$resbul=mysqli_query($baglan,"select * from harcama_tbl where id=$silinecek");
		if($resbul=mysqli_fetch_assoc($resbul)){
			unlink("fatura/".$resbul["resim"]);
		}
			
		mysqli_query($baglan, "delete from harcama_tbl where id=$silinecek") or die ("Silme başarısız...");
		mysqli_close($baglan);
		header('Location: harcama.php');	
	}	
	
	if($g==21)
	{
		$gun=$_REQUEST["gnc"];
		$v1=mysqli_real_escape_string($baglan, $_POST["tarih"]);
		$v2=mysqli_real_escape_string($baglan, $_POST["acik"]);
		$v3=mysqli_real_escape_string($baglan, $_POST["tutar"]);
		$v4=mysqli_real_escape_string($baglan, $_POST["belge"]);

		mysqli_query($baglan, "update harcama_tbl set tarih='$v1', aciklama='$v2', belge='$v4', tutar=$v3 where id=$gun") or die ("güncelleme başarısız...");
		mysqli_close($baglan);
		header('Location: harcama.php');	
	}	
	
	?>
</body>
</html>










