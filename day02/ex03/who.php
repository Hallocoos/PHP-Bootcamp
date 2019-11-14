#!/usr/bin/php
<?php
	$line = fopen("/var/run/utmpx", "rb");
	date_default_timezone_set("Europe/Paris");
	while (!feof($line))
	{
		if ($content = fread($line, 628))
		{
			$content = unpack("a256user/a4id/a32line/ipid/itype/itime", $content);
			if ($content['type'] == 7)
			{
				echo trim($content['user']) . "  " . $content['line'] . "  " . date("M  j H:i", $content['time']) . "\n";
			}
		}
	}
?>