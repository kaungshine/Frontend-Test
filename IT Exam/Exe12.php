<?php
	
	function printNum($d = 'A00', $time = 5)
	{
		for ($i=0; $i < $time; $i++) { 
			echo $d++ . "<br>";
		}
	}
	printNum();
?>