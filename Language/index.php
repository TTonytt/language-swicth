<?php
$lang = $_GET['lang'];
$langArray = array('en', 'fi', 'fr', 'ch');
$found = false;

if(in_array($lang, $langArray))
	$found = true;

if(!$found)
	$lang = 'en';
$xml=simplexml_load_file("languages.xml") or die("xml not found");
$title = $xml->title->$lang;
$text = $xml->text->$lang;
?>

<h1><?php echo $title;?></h1>
<div><?php echo $text;?></div>

<div style="margin-top:50px;">
Language:
<a href="?lang=en">En</a>
<a href="?lang=fi">Fi</a>
<a href="?lang=fr">Fr</a>
<a href="?lang=ch">Ch</a>
</div>