<?php 
include 'pagebuilder/header.php'; 
 ?>



<section>
	

<h1>UI Testing</h1>

<p>Random stuffs :') </p>


</section>

<section>
<h5>UI Testing</h5>

<section></section>


			<section ng-repeat="slide in slides">
							<img src="img/ui-testing/{{slide.file}}.png" alt="">
							<p>
								{{slide.comment}}
							</p>
			</section>



</section>
<!-- 1440 ends here -->


<!-- 1366 mozilla problem -->
 <?php 
include 'pagebuilder/footer.php'; 

 ?>





<style>
	

section img {

max-height: 300px;


	}

section p {
font-size: .5em;
}

.reveal h5 { font-size: 1em; } 


.reveal p { font-size: .4em; } 


</style>


