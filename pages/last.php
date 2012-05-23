<br /><br />

<h2>Les 100 derniers avatars</h2>
<p class="astuce">Attention, seul les avatars ayant été enregistrés en résolution 128x128 pixel apparaissent.<br />
Un avatar par IP est affiché.</p>

<?php
$data = @file_get_contents("http://dofustools.everhate.com/myAvatar/last/");

if(preg_match('~<li><img src="img(\d+).jpg" /></li>~', $data, $out))
{
	$start = $out[1];
}
else
{
	$start = 1;
}

for($i=1;$i<=100;$i++)
{
	echo "<img src=\"http://dofustools.everhate.com/myAvatar/last/img$start.jpg\" />\n";
	$start >= 100 ? $start = 1 : $start++;
}
?>