<?php
//error_reporting(0);
include_once('/var/www/html/simplehtmldom_1_5/simple_html_dom.php');

// Asetukset
//$kuvakansio = '/var/www/html/pics/funbox/';
//$kuva = $kuvakansio.''.$kuvatiedosto.'';
$poistettavat = array("'); document.write('",' alt=""');

// Naurunappula
$naurunappula = file_get_html('http://naurunappula.com/random.php?c=1');
foreach($naurunappula->find('#viewembedded') as $element_naurunappula);
$elementti_filtterin_lapi = str_replace($poistettavat,'',$element_naurunappula);
$pieces = explode('src="', $elementti_filtterin_lapi);
$pieces2 = explode('"', $pieces[1]);
$linkki_naurunappula = $pieces2[0];
//

// Naamapalmu
$naamapalmu = file_get_html('http://naamapalmu.com/filelist/images/random/listing');
foreach($naamapalmu->find('.file') as $element_naamapalmu);
$elementti_filtterin_lapi = str_replace($poistettavat,'',$element_naamapalmu);
$pieces = explode('src="', $elementti_filtterin_lapi);
$pieces2 = explode('"', $pieces[1]);
$linkki_naamapalmu = $pieces2[0];
//

// Riemurasia
$riemurasia = file_get_html('http://www.riemurasia.net/random.php?jg&c=5');
foreach($riemurasia->find('meta[property=og:image]') as $element_riemurasia);
$elementti_filtterin_lapi = str_replace($poistettavat,'',$element_riemurasia);
$pieces = explode('content="', $elementti_filtterin_lapi);
$pieces2 = explode('"', $pieces[1]);
$linkki_riemurasia = $pieces2[0];
//

// Kuvaton
$kuvaton = file_get_html('http://kuvaton.com/1/rand/');
foreach($kuvaton->find('.kuvaboxi') as $element_kuvaton);
$elementti_filtterin_lapi = str_replace($poistettavat,'',$element_kuvaton);
$pieces = explode('src="', $elementti_filtterin_lapi);
$pieces2 = explode('"', $pieces[1]);
$linkki_kuvaton = $pieces2[0];
//

$linkit = array($linkki_naurunappula, $linkki_riemurasia, $linkki_kuvaton, $linkki_naamapalmu);
$linkki = $linkit[array_rand($linkit)];;

$strip = array('/',':',' ');
$kuvatiedosto = str_replace($strip,'',$linkki);
$paikallinen_tiedosto = '/var/www/html/pics/funbox/'.$kuvatiedosto.'';

if (!file_exists($paikallinen_tiedosto)) { 

copy($linkki, $paikallinen_tiedosto); 

}

?>
