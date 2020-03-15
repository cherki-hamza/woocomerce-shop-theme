<?php

if(have_posts()) :

	  while(have_posts()) : the_post();
        ?>
        <div class="col-md-12">
          <article>
          	    <h2 class="text-success font-weight-bold"><?php the_title(); ?></h2>
          	 	<div><?php the_content(); ?></div>
          </article>
      </div>
        <?php
	  endwhile;

else:

   echo "<span class='text-danger'>Oops no posts found</span>";

endif;

