
<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<meta charset="utf-8">
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
	'short_text' => 'Я сделал побдорку лучших кино 2016-2018...',
	'long_text' => '5 МЕСТО: Мир юрского периода и т.д'
	]
];

?>
<?php  $index =  $_GET['index'];?>
<h3 class="text"><?php echo $textphp[$index]['title']; ?></h3>
<p class="tixt"><?php echo $textphp[$index]['long_text']; ?></p>
</body>
</html>