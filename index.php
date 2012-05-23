<!DOCTYPE html>
<html lang="fr">
<head>
	<title>myAvatar 1.29</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="header">
		<div id="tribal_l"></div>
		<a href="/"><div id="title"></div></a>
		<div id="tribal_r"></div>
	</div>
	
	<div id="content">
		<div id="subMenu">
			<div id="subMenuAdd"></div>
			<ul>
				<li><a href="?page=myavatar">myAvatar</a></li>
				<li>-</li>
				<li><a href="?page=last">Derniers avatars</a></li>
			</ul>
		</div>
		
		<?php
		switch(@$_GET['page'])
		{
			case 'last':
				include 'pages/last.php';
				break;
			case 'myavatar':
			default:
				include 'pages/myAvatar.php';
				break;
		}
		?>
	
	</div>
</body>
</html>