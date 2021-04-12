
<div>
<img src="<?php the_post_thumbnail_url();?>" class="img-5">
<h1 class="card-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h1>
<?php
the_content();



?>
</div>