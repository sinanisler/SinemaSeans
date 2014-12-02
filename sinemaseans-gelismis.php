<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Şehirler Sinema Seans</title>

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script>
jQuery(function() {
    jQuery( "#accordion" ).accordion({
      heightStyle: "content"
    });
});  
</script>
</head><body>

<style type="text/css">
body { 
	line-height:22px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:13px;
}


.tum-seanslar{
	width:625px;
	height:auto;
	margin-left:auto;
	margin-right:auto;
	margin-bottom:10px;
}

.sal1{
	width:625px;
	height:35px;
	float:left;
	line-height:35px;
	margin-bottom:5px;
}

.sal2{
	width:625px;
	height:35px;
	float:left;
	line-height:35px;
	text-align:center;
	color:white;
	background:#1ABC9C;
	border:none;
	cursor:pointer;
}

.sal2:hover{
	background:#138F76;
}




.sinema {
	width:625px;
	height:auto;
	float:left;
	margin-bottom:10px;
	font-size:15px;
}

.sinema *{
	font-size:15px;
}


.sinema-film{
	width:615px;
	height:auto;
	float:left;
	margin-bottom:2px;
	font-size:13px;
	color:#C00;
	padding-left:10px;
}

.sinema-zaman { 
	width:615px;
	height:auto;
	float:left;
	margin-bottom:5px;
	padding-left:10px;
}

.sinema-bilgi{
	font-size:12px;
	color:black;
}

.sinema-zaman [style="color:"]{ 
	display: inline;
	padding:5px;
	font-size:12px;
	color:#ac2828;
	border-left:solid 1px #d1d0d3;
	border-bottom:solid 1px #d1d0d3;
}

.sinema-zaman  [style="color:#666"]{ 
	display: inline;
	padding:5px;
	font-size:12px;
	border-left:solid 1px #d1d0d3;
	border-bottom:solid 1px #d1d0d3;
}


.sinema-adres { 
	width:615px;
	height:auto;
	float:left;
	margin-bottom:4px;
	font-size:12px;
	color:#666;
	padding-left:10px;
}

.sinema-baslik a{ display:none}

.sinema-baslik {
	width:615px;
	height:31px;
	float:left;
	line-height:31px;
	padding-left:10px;
	margin-bottom:2px;
	color:white;
	cursor:pointer;
	font-size:15px;
	font-weight:bold;
	background:#D14841;

}

.Yalova3, .Yalova4, .Yalova5, .Yalova6, .Yalova7, .Yalova8, .Yalova9, .Yalova10{display:none !important}
.Manisa2, .Manisa3, .Manisa4, .Manisa5, .Manisa6, .Manisa7, .Manisa8, .Manisa9, .Manisa10{display:none !important}
.Sakarya5{display:none !important}
.Burdur2, .Burdur3{display:none !important}


</style>

<div class="tum-seanslar" >


<p>
    <form action="" method="get">
    
    <select name="sehir" class="sal1">
    <option value="0">Şehir Seçiniz</option>
    
    <option value="İstanbul">İstanbul</option>
    <option value="Ankara">Ankara</option>
    <option value="İzmir">İzmir</option>
    <option value="Adana">Adana</option>
    <option value="Afyon">Afyon</option>
    <option value="Ağrı">Ağrı</option>
    <option value="Antalya">Antalya</option>
    <option value="Aydın">Aydın</option>
    <option value="Bartın">Bartın</option>
    <option value="Batman">Batman</option>
    <option value="Bilecik">Bilecik</option>
    <option value="Bingöl">Bingöl</option>
    <option value="Bolu">Bolu</option>
    <option value="Burdur">Burdur</option>
    <option value="Bursa">Bursa</option>
    <option value="Çanakkale">Çanakkale</option>
    <option value="Çankırı">Çankırı</option>
    <option value="Çorum">Çorum</option>
    <option value="Denizli">Denizli</option>
    <option value="Diyarbakır">Diyarbakır</option>
    <option value="Edirne">Edirne</option>
    <option value="Elazığ">Elazığ</option>
    <option value="Erzincan">Erzincan</option>
    <option value="Erzurum">Erzurum</option>
    <option value="Eskişehir">Eskişehir</option>
    <option value="Gaziantep">Gaziantep</option>
    <option value="Giresun">Giresun</option>
    <option value="Hatay">Hatay</option>
    <option value="Mersin">Mersin</option>
    <option value="Isparta">Isparta</option>
    <option value="Kahramanmaraş">Kahramanmaraş</option>
    <option value="Karabük">Karabük</option>
    <option value="Karaman">Karaman</option>
    <option value="Kastamonu">Kastamonu</option>
    <option value="Kayseri">Kayseri</option>
    <option value="Kırıkkale">Kırıkkale</option>
    <option value="Kırklareli">Kırklareli</option>
    <option value="Kırşehir">Kırşehir</option>
    <option value="Kocaeli">Kocaeli</option>
    <option value="Konya">Konya</option>
    <option value="Kütahya">Kütahya</option>
    <option value="Malatya">Malatya</option>          
    <option value="Manisa">Manisa</option>
    <option value="Mardin">Mardin</option>
    <option value="Muğla">Muğla</option>
    <option value="Muş">Muş</option>
    <option value="Nevşehir">Nevşehir</option>
    <option value="Niğde">Niğde</option>
    <option value="Ordu">Ordu</option>
    <option value="Osmaniye">Osmaniye</option>
    <option value="Rize">Rize</option>
    <option value="Sakarya">Sakarya</option>
    <option value="Samsun">Samsun</option>
    <option value="Sivas">Sivas</option>
    <option value="Şanlıurfa">Şanlıurfa</option>
    <option value="Tekirdağ">Tekirdağ</option>
    <option value="Tokat">Tokat</option>
    <option value="Trabzon">Trabzon</option>
    <option value="Uşak">Uşak</option>
    <option value="Van">Van</option>
    <option value="Yalova">Yalova</option>  
    </select>              
    <input type="submit" class="sal2" value="SEANSLARI GÖSTER"></input>
    </form>
    
</p>

</div>
<div class="tum-seanslar" id="accordion">
<?php

require_once('simple_html_dom.php');
	
$sehiradi= $_GET['sehir'];

	
	
	$curl = curl_init(); 
	curl_setopt($curl, CURLOPT_URL, 'http://www.google.co.uk/movies?near='.$_GET['sehir']);  
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
	curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);  
	$str = curl_exec($curl);  
	curl_close($curl);  
	
	$html = str_get_html($str);
	
	$sayi=1;
	foreach($html->find('#movie_results .theater') as $div) {
		
		
		print utf8_encode("<h3 class='sinema-baslik ".$sehiradi.$sayi."'>".$div->find('h2 a',0)->innertext.' '.$div->find('h2',0)->innertext."</h3>");
		
		
		print '<div class="sinema '.$sehiradi.$sayi.'">';
		print utf8_encode("<span class='sinema-adres'>".$div->find('.desc .info',0)->innertext."</span>");
		
		
		foreach($div->find('.movie') as $movie) {
			print utf8_encode("<span class='sinema-film'>".$movie->find('.name a',0)->innertext.'<br>');
			
			print utf8_encode("<span class='sinema-bilgi' id='sinebilgi'>".$movie->find('.info',0)->innertext.'</span></span>');
			
			print "<span class='sinema-zaman'> ".$movie->find('.times',0)->innertext.'</span>';
			
		}
		print "</div>";
		
		$sayi++;
	}
	
	
	
	$html->clear();
	








if($sehiradi=="İstanbul"){

	$curl = curl_init(); 
	curl_setopt($curl, CURLOPT_URL, 'http://www.google.co.uk/movies?near=istanbul&start=10');  
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
	curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);  
	$str = curl_exec($curl);  
	curl_close($curl);  
	
	$html = str_get_html($str);
	
	$sayi=11;
	foreach($html->find('#movie_results .theater') as $div) {
		
		
		print utf8_encode("<h3 class='sinema-baslik'>".$div->find('h2 a',0)->innertext.' '.$div->find('h2',0)->innertext."</h3>");
		
		
		print '<div class="sinema '.$sehiradi.$sayi.'">';
		print utf8_encode("<span class='sinema-adres'>".$div->find('.desc .info',0)->innertext."</span>");
		
		
		foreach($div->find('.movie') as $movie) {
			print utf8_encode("<span class='sinema-film'>".$movie->find('.name a',0)->innertext.'<br>');
			
			print utf8_encode("<span class='sinema-bilgi' id='sinebilgi'>".$movie->find('.info',0)->innertext.'</span></span>');
			
			print "<span class='sinema-zaman'> ".$movie->find('.times',0)->innertext.'</span>';
			
		}
		print "</div>";
		
		$sayi++;
	}
	
	$html->clear();
	
	
	
	
	
	$curl = curl_init(); 
	curl_setopt($curl, CURLOPT_URL, 'http://www.google.co.uk/movies?near=istanbul&start=20');  
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
	curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);  
	$str = curl_exec($curl);  
	curl_close($curl);  
	
	$html = str_get_html($str);
	
	
	$sayi=21;
	foreach($html->find('#movie_results .theater') as $div) {
		
		
		print utf8_encode("<h3 class='sinema-baslik'>".$div->find('h2 a',0)->innertext.' '.$div->find('h2',0)->innertext."</h3>");
		
		
		print '<div class="sinema '.$sehiradi.$sayi.'">';
		print utf8_encode("<span class='sinema-adres'>".$div->find('.desc .info',0)->innertext."</span>");
		
		
		foreach($div->find('.movie') as $movie) {
			print utf8_encode("<span class='sinema-film'>".$movie->find('.name a',0)->innertext.'<br>');
			
			print utf8_encode("<span class='sinema-bilgi' id='sinebilgi'>".$movie->find('.info',0)->innertext.'</span></span>');
			
			print "<span class='sinema-zaman'> ".$movie->find('.times',0)->innertext.'</span>';
			
		}
		print "</div>";
		
		$sayi++;
	}
	$html->clear();
	
	
	$curl = curl_init(); 
	curl_setopt($curl, CURLOPT_URL, 'http://www.google.co.uk/movies?near=istanbul&start=30');  
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
	curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);  
	$str = curl_exec($curl);  
	curl_close($curl);  
	
	$html = str_get_html($str);
	
	
	$sayi=31;
	foreach($html->find('#movie_results .theater') as $div) {
		
		
		print utf8_encode("<h3 class='sinema-baslik'>".$div->find('h2 a',0)->innertext.' '.$div->find('h2',0)->innertext."</h3>");
		
		
		print '<div class="sinema '.$sehiradi.$sayi.'">';
		print utf8_encode("<span class='sinema-adres'>".$div->find('.desc .info',0)->innertext."</span>");
		
		
		foreach($div->find('.movie') as $movie) {
			print utf8_encode("<span class='sinema-film'>".$movie->find('.name a',0)->innertext.'<br>');
			
			print utf8_encode("<span class='sinema-bilgi' id='sinebilgi'>".$movie->find('.info',0)->innertext.'</span></span>');
			
			print "<span class='sinema-zaman'> ".$movie->find('.times',0)->innertext.'</span>';
			
		}
		print "</div>";
		
		$sayi++;
	}
	
	$html->clear();
	
	
	$curl = curl_init(); 
	curl_setopt($curl, CURLOPT_URL, 'http://www.google.co.uk/movies?near=istanbul&start=40');  
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
	curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);  
	$str = curl_exec($curl);  
	curl_close($curl);  
	
	$html = str_get_html($str);
	
	
	$sayi=41;
	foreach($html->find('#movie_results .theater') as $div) {
		
		
		print utf8_encode("<h3 class='sinema-baslik'>".$div->find('h2 a',0)->innertext.' '.$div->find('h2',0)->innertext."</h3>");
		
		
		print '<div class="sinema '.$sehiradi.$sayi.'">';
		print utf8_encode("<span class='sinema-adres'>".$div->find('.desc .info',0)->innertext."</span>");
		
		
		foreach($div->find('.movie') as $movie) {
			print utf8_encode("<span class='sinema-film'>".$movie->find('.name a',0)->innertext.'<br>');
			
			print utf8_encode("<span class='sinema-bilgi' id='sinebilgi'>".$movie->find('.info',0)->innertext.'</span></span>');
			
			print "<span class='sinema-zaman'> ".$movie->find('.times',0)->innertext.'</span>';
			
		}
		print "</div>";
		
		$sayi++;
	}
	
	$html->clear();
	

}

?>  

</body>
</html>