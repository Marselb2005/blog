
<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
$textphp = [
	[
		'title' => 'Что делать если скучно',
		'short_text' => 'Я седня расскажу че делать если сккушно...',
		'long_text' => 'СПААААЦЦЦ',
	],
	[
		'title' => '5 лучших кино 2016-2018',
	'short_text' => 'Я сделал побдорку кино 2016-2018...',
	'long_text' => '5 МЕСТО: Мир юрского периода и т.д'
	],


];

?>
	<h1 class="tuxt">BLOG</h1>
	<hr>


<?php for($i = 0; $i < count($textphp); $i++) {


	echo '<div> <h3>' . $textphp[$i]['title'] . '<h3> </div>';
	echo '<p>' . $textphp[$i]['short_text'] . '</p>';
	echo '<a href ="bage.php?index=' .$i .'"  >Читать далее...</a><hr>'; 




	
} ?>

</body>
</html>