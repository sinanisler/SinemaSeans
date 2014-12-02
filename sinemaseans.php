<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sinema Seans</title>
<style>
a { display:none }
</style>
</head>

<body>

<?php


require_once('simple_html_dom.php'); // html dom için ufak bir kütüphane internette var



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
	print utf8_encode("<span class='sinema-adres'>".$div->find('.desc .info',0)->innertext."</span> ");
	
	
	foreach($div->find('.movie') as $movie) {
		print utf8_encode("<span class='sinema-film'> <br>".$movie->find('.name a',0)->innertext.'<br>');
		
		print utf8_encode("<span class='sinema-bilgi' id='sinebilgi'>".$movie->find('.info',0)->innertext.'</span></span> <br>');
		
		print "<span class='sinema-zaman'> ".$movie->find('.times',0)->innertext.'</span> <br>';
		
	}
	print "</div>";
	
	$sayi++;
}

$html->clear();

?>

</body>
</html>