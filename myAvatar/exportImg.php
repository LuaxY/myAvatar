<html>
<head>
	<title>Génération de l'image...</title>
</head>
<body onLoad="Send();">
	<script>
		function Send()
		{
			document.myAvatar.submit();
			setTimeout("location.href='/'", 5000);
		}
	</script>

	<form name="myAvatar" method="post" action="http://dofustools.everhate.com/myAvatar/exportImg.php">
		<input type="hidden" name="outputHeight" value="<?php echo $_POST['outputHeight']; ?>" />
		<input type="hidden" name="outputWidth" value="<?php echo $_POST['outputWidth']; ?>" />
		<input type="hidden" name="output" value="<?php echo $_POST['output']; ?>" />
		<input type="hidden" name="pseudo" value="<?php echo $_POST['pseudo']; ?>" />
		<input type="hidden" name="aile" value="<?php echo $_POST['aile']; ?>" />
		<input type="hidden" name="emote" value="<?php echo $_POST['emote']; ?>" />
		<input type="hidden" name="classe" value="<?php echo $_POST['classe']; ?>" />
		<input type="hidden" name="item" value="<?php echo $_POST['item']; ?>" />
	</form>
</body>
</html>