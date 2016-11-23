<!DOCTYPE html>

<meta charset="utf-8" />

<title>Randomia hauskaa &mdash; Joka refreshillä lisää paskaa</title>

<link rel="icon" href="funface.ico" type="image/x-icon" />
<link rel="shortcut icon" href="funface.ico" type="image/x-icon" />
<link rel="bookmark icon" href="funface.ico" type="image/x-icon" />
<link rel="stylesheet" href="newlinks.css" type="text/css" /> 
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<script>
$(document).ready(function() {
$('.refresh').click(function() {
    location.reload();
});

$('.imgbox').load('imgbox.php', function() {
    $('#xiit').fadeOut(1000);
});


});

</script>

</head>
<body>
<?php include('lataa_kuva.php'); ?>
<div id="xiit">

<div class="ladataan">

<img src="ajax-loader.gif" alt="" /> <strong>Ladataan</strong> lisää paskaa...

</div>

</div>

<div id="wrapper">
<div id="prkl"><div class="imgbox"></div></div>
</div>

<footer>
<a href="#" class="refresh"><img src="f5.png" alt="f5" title="Lataa uudet kuvat" /></a>
Hakee hauskoja kuvia ympäri nettiä. Joka refreshillä haetaan uusi kuva ja näytetään randomilla jo haetuista.<br />
Paskaa koodasi taas <b>rolle</b> (@ quakenet) ~ cachessa <b><?php $path = "funbox/"; $filter = array(".", ".."); $max_images = 1; $files = array(); $dir = opendir($path); while (($file = readdir($dir)) !== false) {     if (!in_array($file, $filter)) { $files[] = $file; } } echo count($files); ?></b> filua ~ <a href="https://www.pulina.fi">www.pulina.fi</a></footer>

</body>
</html>
