

<?php 
/*
Template Name: Blog Archive
*/
?>

<?php get_header();?>


<section id="blog">
    <div class="container">
      <div class="heading-title text-center mx-auto">
        <span>Our Stories</span>
        <h2>Latest Blog</h2>
        <hr class="mx-auto">
      </div>

        <div class="blog">
        <?php
$args = array(
    'post_type' => 'blog',
	'posts_per_page' => 10,
	'orderby' => 'comment_count'
);
 
$q = new WP_Query( $args );
 
if( $q->have_posts() ) :
 
	// затем запускаем цикл
	while( $q->have_posts() ) : $q->the_post(); ?>
          <div class="blog-item">
            
            <div class="blog-header">
              <a href="#"><img class="blog-photo" src="<?php the_post_thumbnail(); ?>
              <div class="blog-date">
                <div class="blog-date-day">
        <?php 
	        $mypost_date = the_date("d <br/> M"); 
            
    	    
        ?>
                    <?php echo $mypost_date; ?>
                </div>
                
                <?php echo $mypost_date; ?>
              </div>
            </div>

            <div class="blog-content">
              <div class="blog-title"><a href="#"><h3><?php the_title(); ?></h3></a></div>
              <div class="blog-text"><p><?php the_content(); ?></p></div>
            </div>

            <div class="blog-footer">
              <div class="blog-stat">
                <span class="blog-stat-item"><i class="fa-solid fa-eye"></i>547</span>
              <span class="blog-stat-item"><i class="fa-solid fa-comment-dots"></i>15</span>
              </div>
            </div>
            
          </div>

          
          <?php
    endwhile;
endif;
 
// восстанавливаем глобальную переменную $post
wp_reset_postdata();
?>
          </div>
          
        </div>



    </div>
</section>





            





<?php get_footer();?>



