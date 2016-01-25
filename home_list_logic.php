
				<?php 
				$path    = getcwd();
				$files = scandir($path);
				for ($i=0; $i < sizeof($files); $i++) { 
		   		if (preg_match("/^CredrUX-\S+/", $files[$i], $match)){
		   		echo "<a href='$files[$i]'>$files[$i]</a> <br>";
		   }
		    
			}?>

