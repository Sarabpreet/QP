<section>

<h3>Presentations Archive</h3>
<section>
<ul>			<?php 
				$path    = getcwd();
				$files = scandir($path);
				for ($i=0; $i < sizeof($files); $i++) { 
		   		if (preg_match("/^CredrUX-\S+/", $files[$i], $match)){

		   			$str=substr($files[$i],8,-4);
		   		echo "<li><a href='$files[$i]'>$str</a> <br></li>";
		   }
		    
			}?>
</ul>

</section>




</section>