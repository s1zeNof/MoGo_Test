

<?php ?>

<?php get_header();?>



<section id="team">
    <div class="container">
      <div class="heading-title text-center mx-auto">
        <span>Who we are</span>
        <h2>Meet our team</h2>
        <hr class="mx-auto">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat. </p>
      </div>



      <div class="team_content">
        
        <div class="row">
        <?php 
        $args = array('post_type' => 'team', 'post_per_page' => 10);
        $loop = new WP_Query ( $args );
        while ($loop-> have_posts() ) : $loop->the_post();
        ?>
          <div class="col-md-4">             

            <div class="team_item_bg">
           
              <div class="team-item">
                <img src="<?php the_post_thumbnail(); ?>
                <div class="overlay">
  
                  <div class="team-name">
                    <div class="social">
                      <a class="social-item" href="#">
                        <span><i class="fa-brands fa-facebook-f"></i></span>
                      </a>
                      <a class="social-item" href="#">
                        <span><i class="fa-brands fa-twitter"></i></i></span>
                      </a>
                      <a class="social-item" href="#">
                        <span><i class="fa-brands fa-pinterest-p"></i></span>
                      </a>
                      <a class="social-item" href="#">
                        <span><i class="fa-brands fa-instagram"></i></i></span>
                      </a>
                    </div>
                  </div>
                    
                </div>
              </div>
            </div>
            <div class="team-description">
                <h4><?php the_title(); ?><h4>
              <span><em> <?php the_content(); ?> </em></span>
              
            </div>
            
          </div>
          <?php endwhile; ?>
          
          

  
        </div> <!-- End of row -->
        
      </div> <!-- Enf of team content -->
    </div> <!-- End of container -->
</section>





            





<?php get_footer();?>



