<p class="metadata">
   <?/*<span class="author">
   		<?php 
   		    echo _x('By', 'post_author_attribution', 'Jerome_theme');
   		    echo ' ';
   		    the_author_link();
   		?>
   </span>*/?>
   <span class="category">Dans <?php the_category(', '); ?></span><br/>le <span class="date"><?php the_time(get_option( 'date_format' )); ?></span>
</p>