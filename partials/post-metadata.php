<p class="metadata">
   <span class="author">
   		<?php 
   		    echo _x('By', 'post_author_attribution', 'Jerome_theme');
   		    echo ' ';
   		    the_author_link();
   		?>
   </span>
   <span class="category">filed under <?php the_category(', '); ?></span>
   <span class="date">on&nbsp;<?php the_time('n/j/Y'); ?></span>
</p>