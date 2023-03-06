 <?php
session_start();
require_once 'baglanti.php';

if (isset($_POST['ayarkaydet'])) {
$kaydet=$baglanti->prepare("UPDATE ayarlar SET 

ayar_baslik=:ayar_baslik,
ayar_aciklama=:ayar_aciklama,
ayar_anahtar=:ayar_anahtar,
ayar_adres=:ayar_adres,
ayar_telefon=:ayar_telefon,
ayar_email=:ayar_email,
ayar_elaqebaslik=:ayar_elaqebaslik,
ayar_elaqeaciklama=:ayar_elaqeaciklama
	");
$update=$kaydet->execute(array(

'ayar_baslik'=>htmlspecialchars($_POST['baslik']),
'ayar_aciklama'=>htmlspecialchars($_POST['aciklama']),
'ayar_anahtar'=>htmlspecialchars($_POST['anahtar']),
'ayar_adres'=>htmlspecialchars($_POST['adres']),
'ayar_telefon'=>htmlspecialchars($_POST['telefon']),
'ayar_email'=>htmlspecialchars($_POST['email']),
'ayar_elaqebaslik'=>htmlspecialchars($_POST['bir']),
'ayar_elaqeaciklama'=>htmlspecialchars($_POST['iki'])
));


if ($update) {
Header("Location:ayarlar.php?sayfa=ayarlar&durum=okey");
}else{
	Header("Location:ayarlar.php?sayfa=ayarlar&durum=no");
}

}





if (isset($_POST['sosyalmedyakaydet'])) {
$kaydet=$baglanti->prepare("UPDATE ayarlar SET 

ayar_facebook=:ayar_facebook,
ayar_instagram=:ayar_instagram,
ayar_youtube=:ayar_youtube

	");
$update=$kaydet->execute(array(

'ayar_facebook'=>htmlspecialchars($_POST['facebook']),
'ayar_instagram'=>htmlspecialchars($_POST['instagram']),
'ayar_youtube'=>htmlspecialchars($_POST['youtube'])

));


if ($update) {
Header("Location:ayarlar.php?sayfa=sosyalmedya&durum=okey");
}else{
	Header("Location:ayarlar.php?sayfa=sosyalmedya&durum=no");
}
}






if (isset($_POST['hakkimizdakaydet'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/hakkimizda';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");




$kaydet=$baglanti->prepare("UPDATE hakkimizda SET 

hakkimizda_baslik=:hakkimizda_baslik,
hakkimizda_aciklama=:hakkimizda_aciklama,
hakkimizda_yazi=:hakkimizda_yazi,
hakkimizda_resim=:hakkimizda_resim

	");
$update=$kaydet->execute(array(

'hakkimizda_baslik'=>htmlspecialchars($_POST['baslik']),
'hakkimizda_aciklama'=>$_POST['aciklama'],
'hakkimizda_yazi'=>$_POST['yazi'],
'hakkimizda_resim'=>$resimadi
));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/hakkimizda/$eskiresim");
Header("Location:hakkimizda.php?durum=okey");
}else{
	Header("Location:hakkimizda.php?durum=no");
}

}

else{

$kaydet=$baglanti->prepare("UPDATE hakkimizda SET 

hakkimizda_baslik=:hakkimizda_baslik,
hakkimizda_aciklama=:hakkimizda_aciklama


	");
$update=$kaydet->execute(array(

'hakkimizda_baslik'=>htmlspecialchars($_POST['baslik']),
'hakkimizda_aciklama'=>$_POST['aciklama']
));
if ($update) {
Header("Location:hakkimizda.php?durum=okey");
}else{
	Header("Location:hakkimizda.php?durum=no");
}

}


}










if (isset($_POST['sliderkaydet'])) {


	$uploads_dir='resimler/slider';
	@$tmp_name= $_FILES['slideresim'] ["tmp_name"];
	@$name= $_FILES['slideresim'] ["name"];


	$sayi=rand(1,1000000);
	$sayi2=rand(1,100000);
	$sayi3=rand(10000, 20000000);


	$sayilar=$sayi.$sayi2.$sayi3;
	$resimyolu=$sayilar.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
	$sliderkaydet=$baglanti->prepare("INSERT into slider SET 

		
		

		
		
		
		
		

		slider_baslik=:slider_baslik,
		slider_aciklama=:slider_aciklama,
		slider_sira=:slider_sira,

	
		slider_resim=:slider_resim


		");

	$insert=$sliderkaydet->execute(array(
		'slider_baslik'=>$_POST['sliderbaslik'],
		'slider_aciklama'=>$_POST['slideraciklama'],
		'slider_sira'=>$_POST['slidersira'],

	

		'slider_resim'=>$resimyolu




	));
	if ($insert) {

		header("Location:slider?yuklenme=basarili");
	}
	else{
		header("Location:slider?yuklenme=basarisiz");
	}

}


if (isset($_POST['sliderduzenle'])) {

	$slideid=$_POST['id'];

	if ($_FILES['slideresim']   ["size"]>0) {

		$uploads_dir='resimler/slider';
		@$tmp_name= $_FILES['slideresim'] ["tmp_name"];
		@$name= $_FILES['slideresim'] ["name"];


		$sayi=rand(1,1000000);
		$sayi2=rand(1,100000);
		$sayi3=rand(10000, 20000000);


		$sayilar=$sayi.$sayi2.$sayi3;
		$resimyolu=$sayilar.$name;

		@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
		$duzenle=$baglanti->prepare("UPDATE slider SET 



			slider_baslik=:slider_baslik,
			slider_aciklama=:slider_aciklama,
			slider_sira=:slider_sira,

			slider_resim=:slider_resim

			WHERE slider_id=$slideid

			");

		$update=$duzenle->execute(array(

			'slider_baslik'=>$_POST['sliderbaslik'],
			'slider_aciklama'=>$_POST['slideraciklama'],
			'slider_sira'=>$_POST['slidersira'],
	
			'slider_resim'=>$resimyolu


		));
		if ($update) {

			$resimsil=$_POST['eskiresim'];
			unlink("resimler/slider/$resimsil");

			header("Location:slider.php?yuklenme=basarili");
		}
		else{
			header("Location:slider.php?yuklenme=basarisiz");
		}




	}
	else{

		$duzenle=$baglanti->prepare("UPDATE slider SET 



			slider_baslik=:slider_baslik,
			slider_aciklama=:slider_aciklama,
			slider_sira=:slider_sira
			WHERE slider_id=$slideid

			");

		$update=$duzenle->execute(array(

			'slider_baslik'=>$_POST['sliderbaslik'],
			'slider_aciklama'=>$_POST['slideraciklama'],
			'slider_sira'=>$_POST['slidersira']


		));
		if ($update) {

			header("Location:slider.php?yuklenme=basarili");
		}
		else{
			header("Location:slider.php?yuklenme=basarisiz");
		}
	}
}




if (isset($_POST['slidersil'])) {


	$slidersil=$baglanti->prepare("DELETE from  slider where slider_id=:slider_id ");

	$slidersil->execute(array(
		'slider_id'=>$_POST['id']


	));

	if ($slidersil) {

		$resimsil=$_POST['resim'];
		unlink("resimler/slider/$resimsil");
		Header("Location:slider?yuklenme=basarili");
	}
	else{
		Header("Location:slider?yuklenme=hata");
	}
}














if (isset($_POST['galerikaydet'])) {
	$uploads_dir='resimler/galeri';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("INSERT into galeri SET 

galeri_baslik=:galeri_baslik,
galeri_kat=:galeri_kat,
galeri_sira=:galeri_sira,
galeri_aciklama=:galeri_aciklama,
galeri_il=:galeri_il,
galeri_compani=:galeri_compani,
galeri_unvan=:galeri_unvan,

galeri_resim=:galeri_resim
	");
$insert=$kaydet->execute(array(

'galeri_baslik'=>htmlspecialchars($_POST['baslik']),
'galeri_kat'=>htmlspecialchars($_POST['kat']),
'galeri_sira'=>htmlspecialchars($_POST['sira']),
'galeri_il'=>htmlspecialchars($_POST['il']),
'galeri_compani'=>htmlspecialchars($_POST['compani']),
'galeri_unvan'=>htmlspecialchars($_POST['unvan']),
'galeri_aciklama'=>$_POST['aciklama'],

'galeri_resim'=>$resimadi
));




if ($insert) {
Header("Location:galeri.php?durum=okey");
}else{
	Header("Location:galeri.php?durum=no");
}

}





if (isset($_POST['galeriduzenle'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/galeri';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");





$kaydet=$baglanti->prepare("UPDATE galeri SET 

galeri_baslik=:galeri_baslik,
galeri_kat=:galeri_kat,
galeri_sira=:galeri_sira,
galeri_aciklama=:galeri_aciklama,
galeri_il=:galeri_il,
galeri_compani=:galeri_compani,
galeri_unvan=:galeri_unvan,

galeri_resim=:galeri_resim
WHERE galeri_id={$_POST['id']}
	");
$update=$kaydet->execute(array(



'galeri_baslik'=>htmlspecialchars($_POST['baslik']),
'galeri_kat'=>htmlspecialchars($_POST['kat']),
'galeri_sira'=>htmlspecialchars($_POST['sira']),
'galeri_il'=>htmlspecialchars($_POST['il']),
'galeri_compani'=>htmlspecialchars($_POST['compani']),
'galeri_unvan'=>htmlspecialchars($_POST['unvan']),
'galeri_aciklama'=>$_POST['aciklama'],

'galeri_resim'=>$resimadi
));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/galeri/$eskiresim");
Header("Location:galeri.php?durum=okey");
}else{
	Header("Location:galeri.php?durum=no");
}

}

else{


$kaydet=$baglanti->prepare("UPDATE galeri SET 

galeri_baslik=:galeri_baslik,
galeri_kat=:galeri_kat,
galeri_sira=:galeri_sira,
galeri_aciklama=:galeri_aciklama,
galeri_il=:galeri_il,
galeri_compani=:galeri_compani,
galeri_unvan=:galeri_unvan

WHERE galeri_id={$_POST['id']}

	");
$update=$kaydet->execute(array(
'galeri_baslik'=>htmlspecialchars($_POST['baslik']),
'galeri_kat'=>htmlspecialchars($_POST['kat']),
'galeri_sira'=>htmlspecialchars($_POST['sira']),
'galeri_il'=>htmlspecialchars($_POST['il']),
'galeri_compani'=>htmlspecialchars($_POST['compani']),
'galeri_unvan'=>htmlspecialchars($_POST['unvan']),
'galeri_aciklama'=>$_POST['aciklama']
));
if ($update) {
Header("Location:galeri.php?durum=okey");
}else{
	Header("Location:galeri.php?durum=no");
}

}


}






if (isset($_POST['galerisil'])) {
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/galeri/$eskiresim");

$sil=$baglanti->prepare("DELETE  FROM galeri where galeri_id=:galeri_id");
$sil->execute(array(

'galeri_id'=>$_POST['id']
));


if ($sil) {
	Header("Location:galeri.php?durum=okey");
}
else{
		Header("Location:galeri.php?durum=no");

}
}








if (isset($_POST['blogkaydet'])) {
	$uploads_dir='resimler/blog';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("INSERT into blog SET 

blog_baslik=:blog_baslik,
blog_anahtarkelime=:blog_anahtarkelime,
blog_sira=:blog_sira,
blog_aciklama=:blog_aciklama,

blog_resim=:blog_resim
	");
$insert=$kaydet->execute(array(

'blog_baslik'=>htmlspecialchars($_POST['baslik']),
'blog_anahtarkelime'=>htmlspecialchars($_POST['anahtarkelime']),
'blog_sira'=>htmlspecialchars($_POST['sira']),
'blog_aciklama'=>$_POST['aciklama'],

'blog_resim'=>$resimadi
));




if ($insert) {
Header("Location:blog.php?durum=okey");
}else{
	Header("Location:blog.php?durum=no");
}

}





if (isset($_POST['blogduzenle'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/blog';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");





$kaydet=$baglanti->prepare("UPDATE blog SET 


blog_baslik=:blog_baslik,
blog_anahtarkelime=:blog_anahtarkelime,
blog_sira=:blog_sira,
blog_aciklama=:blog_aciklama,

blog_resim=:blog_resim
WHERE blog_id={$_POST['id']}
	");
$update=$kaydet->execute(array(


'blog_baslik'=>htmlspecialchars($_POST['baslik']),
'blog_anahtarkelime'=>htmlspecialchars($_POST['anahtarkelime']),
'blog_sira'=>htmlspecialchars($_POST['sira']),
'blog_aciklama'=>$_POST['aciklama'],
'blog_resim'=>$resimadi
));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/blog/$eskiresim");
Header("Location:blog.php?durum=okey");
}else{
	Header("Location:blog.php?durum=no");
}

}

else{


$kaydet=$baglanti->prepare("UPDATE blog SET 

blog_baslik=:blog_baslik,
blog_anahtarkelime=:blog_anahtarkelime,
blog_sira=:blog_sira,
blog_aciklama=:blog_aciklama

WHERE blog_id={$_POST['id']}

	");
$update=$kaydet->execute(array(
'blog_baslik'=>htmlspecialchars($_POST['baslik']),
'blog_anahtarkelime'=>htmlspecialchars($_POST['anahtarkelime']),
'blog_sira'=>htmlspecialchars($_POST['sira']),
'blog_aciklama'=>$_POST['aciklama']
));
if ($update) {
Header("Location:blog.php?durum=okey");
}else{
	Header("Location:blog.php?durum=no");
}

}


}






if (isset($_POST['blogsil'])) {
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/blog/$eskiresim");

$sil=$baglanti->prepare("DELETE  FROM blog where blog_id=:blog_id");
$sil->execute(array(

'blog_id'=>$_POST['id']
));


if ($sil) {
	Header("Location:blog.php?durum=okey");
}
else{
		Header("Location:blog.php?durum=no");

}
}







if (isset($_POST['kategorikaydet'])) {
	

$kaydet=$baglanti->prepare("INSERT into kategori SET 

kategori_baslik=:kategori_baslik,

kategori_sira=:kategori_sira,
kategori_durum=:kategori_durum
	");
$insert=$kaydet->execute(array(

'kategori_baslik'=>htmlspecialchars($_POST['baslik']),

'kategori_sira'=>htmlspecialchars($_POST['sira']),
'kategori_durum'=>htmlspecialchars($_POST['durum'])
));




if ($insert) {
Header("Location:kategori.php?durum=okey");
}else{
	Header("Location:kategori.php?durum=no");
}

}




if (isset($_POST['kategoriduzenle'])) {

$duzenle=$baglanti->prepare("UPDATE kategori SET 
kategori_baslik=:kategori_baslik,

kategori_sira=:kategori_sira,
kategori_durum=:kategori_durum

WHERE kategori_id={$_POST['id']}

	");
$update=$duzenle->execute(array(


'kategori_baslik'=>htmlspecialchars($_POST['baslik']),

'kategori_sira'=>htmlspecialchars($_POST['sira']),
'kategori_durum'=>htmlspecialchars($_POST['durum'])

));
if ($update) {
Header("Location:kategori.php?durum=okey");
}else{
	Header("Location:kategori.php?durum=no");
}

}


if (isset($_GET['kategorisil'])) {

$sil=$baglanti->prepare("DELETE  FROM kategori where kategori_id=:kategori_id");
$sil->execute(array(

'kategori_id'=>$_GET['id']
));


if ($sil) {
	Header("Location:kategori.php?durum=okey");
}
else{
		Header("Location:kategori.php?durum=no");

}
}





if (isset($_POST['icerikkaydet'])) {
	$katid=$_POST['katid'];
	$uploads_dir='resimler/icerik';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("INSERT into icerik SET 


icerik_baslik=:icerik_baslik,

icerik_sira=:icerik_sira,
icerik_aciklama=:icerik_aciklama,
kategori_id=:kategori_id,
icerik_anahtarkelime=:icerik_anahtarkelime,
icerik_resim=:icerik_resim
	");
$insert=$kaydet->execute(array(

'icerik_baslik'=>htmlspecialchars($_POST['baslik']),
'icerik_sira'=>htmlspecialchars($_POST['sira']),
'icerik_aciklama'=>$_POST['aciklama'],
'kategori_id'=>htmlspecialchars($_POST['katid']),
'icerik_anahtarkelime'=>htmlspecialchars($_POST['icerikanahtar']),
'icerik_resim'=>$resimadi
));


if ($insert) {
Header("Location:icerik.php?katid=$katid&durum=okey");
}else{
	Header("Location:icerik.php?katid=$katid&durum=no");
}

}











if (isset($_POST['iceriksil'])) {
	$katid=$_POST['katid'];
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/icerik/$eskiresim");

$sil=$baglanti->prepare("DELETE  FROM icerik where icerik_id=:icerik_id");
$sil->execute(array(

'icerik_id'=>$_POST['id']
));


if ($sil) {
	Header("Location:icerik.php?katid=$katid&durum=okey");
}
else{
		Header("Location:icerik.php?katid=$katid&durum=no");

}
}








if (isset($_POST['icerikduzenle'])) {
$katid=$_POST['katid'];
if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/icerik';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("UPDATE icerik SET 
icerik_baslik=:icerik_baslik,

icerik_sira=:icerik_sira,
icerik_aciklama=:icerik_aciklama,
kategori_id=:kategori_id,
icerik_anahtarkelime=:icerik_anahtarkelime,
icerik_resim=:icerik_resim

WHERE icerik_id={$_POST['id']}
	");
$update=$kaydet->execute(array(



'icerik_baslik'=>htmlspecialchars($_POST['baslik']),
'icerik_sira'=>htmlspecialchars($_POST['sira']),
'icerik_aciklama'=>$_POST['aciklama'],
'kategori_id'=>htmlspecialchars($_POST['katid']),
'icerik_anahtarkelime'=>htmlspecialchars($_POST['icerikanahtar']),
'icerik_resim'=>$resimadi

));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/icerik/$eskiresim");
Header("Location:icerik.php?katid=$katid&durum=okey");
}else{
Header("Location:icerik.php?katid=$katid&durum=no");
}

}

else{

$kaydet=$baglanti->prepare("UPDATE icerik SET 
icerik_baslik=:icerik_baslik,

icerik_sira=:icerik_sira,
icerik_aciklama=:icerik_aciklama,
kategori_id=:kategori_id,
icerik_anahtarkelime=:icerik_anahtarkelime

WHERE icerik_id={$_POST['id']}

	");
$update=$kaydet->execute(array(



'icerik_baslik'=>htmlspecialchars($_POST['baslik']),
'icerik_sira'=>htmlspecialchars($_POST['sira']),
'icerik_aciklama'=>$_POST['aciklama'],
'kategori_id'=>htmlspecialchars($_POST['katid']),
'icerik_anahtarkelime'=>htmlspecialchars($_POST['icerikanahtar'])
));
if ($update) {
Header("Location:icerik.php?katid=$katid&durum=okey");
}else{
Header("Location:icerik.php?katid=$katid&durum=no");
}

}


}



 

if (isset($_POST['abone'])) {
	

$kaydet=$baglanti->prepare("INSERT into abone SET 

abone_email=:abone_email
	");
$insert=$kaydet->execute(array(

'abone_email'=>htmlspecialchars($_POST['email'])
));




if ($insert) {
Header("Location:../iletisim.php?durum=okey");
}else{
	Header("Location:../iletisim.php?durum=no");
}

}








if (isset($_POST['blogyorumkaydet'])) {
$link=$_SERVER['HTTP_REFERER'];

$kaydet=$baglanti->prepare("INSERT into yorumlar SET 

yorum_kategori=:yorum_kategori,

icerik_id=:icerik_id,
yorum_adsoyad=:yorum_adsoyad,
yorum_detay=:yorum_detay
	");
$insert=$kaydet->execute(array(

'yorum_kategori'=>htmlspecialchars($_POST['kategori']),

'icerik_id'=>htmlspecialchars($_POST['id']),
'yorum_adsoyad'=>htmlspecialchars($_POST['adsoyad']),
'yorum_detay'=>htmlspecialchars($_POST['detay'])

));




if ($insert) {
Header("Location:$link?durum=okey");
}else{
	Header("Location:$link?durum=no");
}

}






if (isset($_GET['yorumonayla'])) {

$duzenle=$baglanti->prepare("UPDATE yorumlar SET 
yorum_onay=:yorum_onay

WHERE yorum_id={$_GET['id']}

	");
$update=$duzenle->execute(array(


'yorum_onay'=>1


));
if ($update) {
Header("Location:yorumlar.php?durum=okey");
}else{
	Header("Location:yorumlar.php?durum=no");
}

}



if (isset($_GET['yorumsil'])) {

$sil=$baglanti->prepare("DELETE  FROM yorumlar where yorum_id=:yorum_id");
$sil->execute(array(

'yorum_id'=>$_GET['id']
));

if ($sil) {
Header("Location:yorumlar.php?durum=okey");
}else{
	Header("Location:yorumlar.php?durum=no");
}

}





if (isset($_POST['icerikyorumkaydet'])) {
$link=$_SERVER['HTTP_REFERER'];

$kaydet=$baglanti->prepare("INSERT into yorumlar SET 

yorum_kategori=:yorum_kategori,

icerik_id=:icerik_id,
yorum_adsoyad=:yorum_adsoyad,
yorum_detay=:yorum_detay
	");
$insert=$kaydet->execute(array(

'yorum_kategori'=>htmlspecialchars($_POST['kategori']),

'icerik_id'=>htmlspecialchars($_POST['id']),
'yorum_adsoyad'=>htmlspecialchars($_POST['adsoyad']),
'yorum_detay'=>htmlspecialchars($_POST['detay'])

));




if ($insert) {
Header("Location:$link?durum=okey");
}else{
	Header("Location:$link?durum=no");
}

}



if (isset($_POST['girisyap'])) {

$email=htmlspecialchars($_POST['email']);
$sifre=htmlspecialchars($_POST['sifre']);
$md5=md5($sifre);



$kullanicisor=$baglanti->prepare("SELECT * FROM kullanici  where kullanici_email=:kullanici_email and kullanici_sifre=:kullanici_sifre");
$kullanicisor->execute(array(
'kullanici_email'=>$email,
'kullanici_sifre'=>$md5
));
$var=$kullanicisor->rowCount();

if ($var=="0") {
Header("Location:giris.php?durum=hata");
}else{
	$_SESSION['giris']=$email;
	Header("Location:index.php?durum=okey");
}
}












if (isset($_POST['cokluresimsil'])) {
$yonlendir=$_POST['galeriid'];

	$cokluresimsil=$baglanti->prepare("DELETE from  cokluresim where id=:id ");

	$cokluresimsil->execute(array(
		'id'=>$_POST['id']


	));

	if ($cokluresimsil) {

		$resimsil=$_POST['resim'];
		unlink("resimler/cokluresim/$resimsil");
		header("Location:cokluresim?id=$yonlendir&yuklenme=basarili");
	}
	else{
			header("Location:cokluresim?id=$yonlendir&yuklenme=basarisiz");
	}
}




if (isset($_POST['xidmetresimsil'])) {
$yonlendir=$_POST['servisid'];

	$cokluresimsil=$baglanti->prepare("DELETE from  xidmetresim where id=:id ");

	$cokluresimsil->execute(array(
		'id'=>$_POST['id']


	));

	if ($cokluresimsil) {

		$resimsil=$_POST['resim'];
		unlink("resimler/xidmetresim/$resimsil");
		header("Location:xidmetresim?id=$yonlendir&yuklenme=basarili");
	}
	else{
			header("Location:xidmetresim?id=$yonlendir&yuklenme=basarisiz");
	}
}









if (isset($_POST['serviskaydet'])) {
	$uploads_dir='resimler/servis';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("INSERT into services SET 

servis_baslik=:servis_baslik,
servis_rakam=:servis_rakam,
servis_sira=:servis_sira,
servis_aciklama=:servis_aciklama,
servis_resim=:servis_resim
	");
$insert=$kaydet->execute(array(

'servis_baslik'=>htmlspecialchars($_POST['baslik']),
'servis_rakam'=>htmlspecialchars($_POST['rakam']),
'servis_sira'=>htmlspecialchars($_POST['sira']),
'servis_aciklama'=>$_POST['aciklama'],

'servis_resim'=>$resimadi
));




if ($insert) {
Header("Location:xidmet.php?durum=okey");
}else{
	Header("Location:xidmet.php?durum=no");
}

}





if (isset($_POST['servisduzenle'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/servis';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");





$kaydet=$baglanti->prepare("UPDATE services SET 

servis_baslik=:servis_baslik,
servis_rakam=:servis_rakam,
servis_sira=:servis_sira,
servis_aciklama=:servis_aciklama,
servis_resim=:servis_resim
WHERE servis_id={$_POST['id']}
	");
$update=$kaydet->execute(array(



'servis_baslik'=>htmlspecialchars($_POST['baslik']),
'servis_rakam'=>htmlspecialchars($_POST['rakam']),
'servis_sira'=>htmlspecialchars($_POST['sira']),
'servis_aciklama'=>$_POST['aciklama'],

'servis_resim'=>$resimadi
));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/servis/$eskiresim");
Header("Location:xidmet.php?durum=okey");
}else{
	Header("Location:xidmet.php?durum=no");
}

}

else{


$kaydet=$baglanti->prepare("UPDATE services SET 

servis_baslik=:servis_baslik,
servis_rakam=:servis_rakam,
servis_sira=:servis_sira,
servis_aciklama=:servis_aciklama

WHERE servis_id={$_POST['id']}

	");
$update=$kaydet->execute(array(

'servis_baslik'=>htmlspecialchars($_POST['baslik']),
'servis_rakam'=>htmlspecialchars($_POST['rakam']),
'servis_sira'=>htmlspecialchars($_POST['sira']),
'servis_aciklama'=>$_POST['aciklama']
));
if ($update) {
Header("Location:xidmet.php?durum=okey");
}else{
	Header("Location:xidmet.php?durum=no");
}

}


}






if (isset($_POST['servissil'])) {
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/servis/$eskiresim");

$sil=$baglanti->prepare("DELETE  FROM services where servis_id=:servis_id");
$sil->execute(array(

'servis_id'=>$_POST['id']
));


if ($sil) {
	Header("Location:xidmet.php?durum=okey");
}
else{
		Header("Location:xidmet.php?durum=no");

}
}



















if (isset($_POST['fikirkaydet'])) {
	$uploads_dir='resimler/fikir';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("INSERT into fikir SET 

fikir_ad=:fikir_ad,
fikir_vezife=:fikir_vezife,
fikir_sira=:fikir_sira,
fikir_aciklama=:fikir_aciklama,

fikir_resim=:fikir_resim
	");
$insert=$kaydet->execute(array(

'fikir_ad'=>htmlspecialchars($_POST['ad']),
'fikir_vezife'=>htmlspecialchars($_POST['vezife']),
'fikir_sira'=>htmlspecialchars($_POST['sira']),

'fikir_aciklama'=>$_POST['aciklama'],

'fikir_resim'=>$resimadi
));




if ($insert) {
Header("Location:fikirler.php?durum=okey");
}else{
	Header("Location:fikirler.php?durum=no");
}

}










if (isset($_POST['fikirsil'])) {
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/fikir/$eskiresim");

$sil=$baglanti->prepare("DELETE  FROM fikir where fikir_id=:fikir_id");
$sil->execute(array(

'fikir_id'=>$_POST['id']
));


if ($sil) {
	Header("Location:fikirler.php?durum=okey");
}
else{
		Header("Location:fikirler.php?durum=no");

}
}












if (isset($_POST['elaqe'])) {
	

$kaydet=$baglanti->prepare("INSERT into elaqe SET 

elaqe_adsoyad=:elaqe_adsoyad,
elaqe_telefon=:elaqe_telefon,

elaqe_text=:elaqe_text
	");
$insert=$kaydet->execute(array(

'elaqe_adsoyad'=>htmlspecialchars($_POST['isim']),
'elaqe_telefon'=>htmlspecialchars($_POST['eposta']),

'elaqe_text'=>htmlspecialchars($_POST['mesaj'])
));




if ($insert) {
Header("Location:../index.php?durum=okey");
}else{
	Header("Location:../index.php?durum=no");
}

}






if (isset($_POST['elaqesil'])) {
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/elaqe/$eskiresim");

$sil=$baglanti->prepare("DELETE  FROM elaqe where elaqe_id=:elaqe_id");
$sil->execute(array(

'elaqe_id'=>$_POST['id']
));


if ($sil) {
	Header("Location:elaqe.php?durum=okey");
}
else{
		Header("Location:elaqe.php?durum=no");

}
}









 ?>