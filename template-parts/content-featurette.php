<?php

/**
 * Created by PhpStorm.
 * User: Kaan
 * Date: 11/24/2016
 * Time: 1:12 PM
 */

$course_introduction_title = get_field( 'course_introduction_title' );
$course_introduction_video = get_field( 'course_introduction_video' );

?>



<!--VIDEO FETURETE ========================-->
<section id="featurette">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h2><?php echo $course_introduction_title ?></h2>
<iframe width="100%" height="415" src="<?php echo $course_introduction_video ?>" frameborder="0"
        allowfullscreen></iframe>
</div><!--col end-->
</div><!--row-->
</div><!--container-->
</section><!--featurette-->