<!-- 
	-----EXAMPLE-----
	$bgColour = "primary";
	$bgImage = "images/laptop-60-opacity.png";
	$textColour = "dark";
	$sectionH1 = "Deej Potter Designs";
	$sectionP = "Your own personal web designer. <br>Prices start at $100. <br><strong>Contact me now!</strong>";
	include "templates/home-hero.php"
 -->

<section class="bg-<?php echo $bgColour ?> text-<?php echo $textColour ?> py-5 <?php echo $otherClasses ?>" style='background-image:url(<?php echo $bgImage ?>);'>
	<div class="container">
		<h2><?php echo $sectionH2; ?></h2>
        <p class="lead"><?php echo $sectionP; ?></p>
        <a class="btn btn-<?php echo $buttonColour ?>" href= "<?php echo $fileLevel; echo $sectionButtonLink; ?>"><?php echo $sectionButtonText; ?></a>	
	</div>
</section>