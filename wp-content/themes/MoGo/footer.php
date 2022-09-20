<footer class="footer">
    <div class="container">
        <div class="row">

          <div class="footer-blocks d-flex">
            <div class="col-md-5">
              <div class="footer-block">
                <div class="footer-logo footer-title"><h2>MoGo</h2></div>
                <div class="footer-text">
                  <p>Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam, quis
                     nostrud exercitation ullamco laboris nisi ut 
                     aliquip ex ea commodo consequat. </p>
                </div>
                <div class="footer-followers">
                  <span>15k</span> followers
                </div>
                <div class="footer-follow-us">
                    <span>Follow Us:</span>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                    <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#"><i class="fa-solid fa-globe"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <div class="footer-subscribe-email">
                  <form action="#">
                    <input type="text" placeholder="Your Email...">
                    <button class="footer-subsc-btn">Subscribe</button>
                  </form>
                </div>
              </div>
          </div>

          <div class="col-md-4">
            <div class="footer-block">
              <div class="footer-title">
                <a href="/blog">Blogs</a>
              </div>
              <div class="footer-blogs">


              <?php
              $args = array(
                  'post_type' => 'blog',
                'posts_per_page' => 3,
                'orderby' => 'comment_count'
              );
              
              $q = new WP_Query( $args );
              
              if( $q->have_posts() ) :
              
                // затем запускаем цикл
                while( $q->have_posts() ) : $q->the_post(); ?>


                <div class="footer-blogs-item">
                  <a href="<?php the_permalink(); ?>"><img style="width: 120px !important; height: 80px;" src="<?php the_post_thumbnail(); ?> </a>
                
                  <div class="footer-blog-info">
                    <div class="footer-blog-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                      <div class="footer-blog-date"><?php echo the_date("M,d,Y"); ?></div>
                  </div>
                  
                </div>
                <?
    endwhile;
endif;
 
// восстанавливаем глобальную переменную $post
wp_reset_postdata();
?>

              </div>
            </div>
          </div>

      <div class="col-md-3">
        <div class="footer-block">
          <div class="footer-title">
            Instagram
          </div>
          <div class="instagram">
            <a href="#" class="instagram-item" target="_blank">
              <img src="/wp-content/themes/MoGo/assets/images/footer/insta/footer-insta_1.png">
            </a>
            <a href="#" class="instagram-item" target="_blank">
              <img src="/wp-content/themes/MoGo/assets/images/footer/insta/footer-insta_2.png">
            </a>
            <a href="#" class="instagram-item" target="_blank">
              <img src="/wp-content/themes/MoGo/assets/images/footer/insta/footer-insta_3.png">
            </a>
            <a href="#" class="instagram-item" target="_blank">
              <img src="/wp-content/themes/MoGo/assets/images/footer/insta/footer-insta_4.png">
            </a>
            <a href="#" class="instagram-item" target="_blank">
              <img src="/wp-content/themes/MoGo/assets/images/footer/insta/footer-insta_5.png">
            </a>
            <a href="#" class="instagram-item" target="_blank">
              <img src="/wp-content/themes/MoGo/assets/images/footer/insta/footer-insta_6.png">
            </a>
            <a href="#" class="instagram-item" target="_blank">
              <img src="/wp-content/themes/MoGo/assets/images/footer/insta/footer-insta_7.png">
            </a>
            <a href="#" class="instagram-item" target="_blank">
              <img src="/wp-content/themes/MoGo/assets/images/footer/insta/footer-insta_8.png">
            </a>
            <a href="#" class="instagram-item" target="_blank">
              <img src="/wp-content/themes/MoGo/assets/images/footer/insta/footer-insta_9.png">
            </a>
            <div class="instagram-viewMore">
              <a href="#">View more photos</a>
            </div>
          </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>