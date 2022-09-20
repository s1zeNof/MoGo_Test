<?php get_header();?>

<?php
/*
Template Name: Home
*/
?>
<?php the_content(); ?>

<?php 
// ACF
$hero_slider1 = get_field('hero_slider_1');?>


<section id="hero">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-pause="true">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">awdawd</li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                
              
                <img class="d-block w-100" src="/wp-content/uploads/2022/09/hero_slider1.jpg" alt="First slide">
              
              
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="/wp-content/uploads/2022/09/hero_slider1.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="/wp-content/uploads/2022/09/hero_slider1.jpg" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="/wp-content/uploads/2022/09/hero_slider1.jpg" alt="Third slide">
              </div>
            </div>
            
          </div>
</section>        

<section id="about">
  <div class="container">

    <div class="heading-title text-center mx-auto">
      <span>What we Do</span>
      <h2>Story About Us</h2>
      <hr class="mx-auto">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
        nisi ut aliquip ex ea commodo consequat. </p>
    </div>

    <div class="about_content">
      <div class="row">
        <div class="col-md-4">
          <div class="about_item_bg">

            <div class="about-item">
              <img src="<?php echo the_field("about_image_1"); ?>">
              <div class="overlay">

              
    



                <div class="about-icon">
                    <img src="/wp-content/uploads/2022/09/super-team.png">
                </div>
                <div class="about-name">
                    <span>Super Team</span>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="about_item_bg">

            <div class="about-item">
              <img src="<?php echo the_field("about_image_2"); ?>">
              <div class="overlay">

                <div class="about-icon">
                    <img src="/wp-content/uploads/2022/09/super-team.png">
                </div>
                <div class="about-name">
                    <span>Super Team</span>
                </div>

              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="about_item_bg">

            <div class="about-item">
              <img src="<?php echo the_field("about_image_3"); ?>">
              <div class="overlay">

                <div class="about-icon">
                    <img src="/wp-content/uploads/2022/09/super-team.png">
                </div>
                <div class="about-name">
                    <span>Super Team</span>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="statistic">
  <div class="container">
    <div class="stat">

        <!-- Stat 1 -->
      <div class="stat_item">
        <div class="stat_count">
          42
        </div>
        <div class="stat_text">
          Web Design Projects
        </div>
      </div>
        <!-- Stat 2 -->
      <div class="stat_item">
        <div class="stat_count">
          123
        </div>
        <div class="stat_text">
          Happy Client
        </div>
      </div>
        <!-- Stat 3 -->
      <div class="stat_item">
        <div class="stat_count">
          15
        </div>
        <div class="stat_text">
          Award Winner
        </div>
      </div>
        <!-- Stat 4 -->
      <div class="stat_item">
        <div class="stat_count">
          99
        </div>
        <div class="stat_text">
          Cup Of Coffee
        </div>
      </div>
        <!-- Stat 5 -->
      <div class="stat_item">
        <div class="stat_count">
          24
        </div>
        <div class="stat_text">
          Members
        </div>
      </div>

    </div>
  </div>
</div>

<section id="services">
    <div class="container">
      <div class="heading-title text-center mx-auto">
        <span>We Work with</span>
        <h2>Amazing Services</h2>
        <hr class="mx-auto">
      </div>
      <div class="service_content d-flex">

        <div class="services_item">
          <img src="/wp-content/uploads/2022/09/alarm.png" class="services-icon">
          <div class="services_title">Photography</div>
          <div class="services_text">Lorem ipsum dolor sit amet,
             consectetur adipiscing elit, sed do eiusmod tempor.</div>
        </div>
        <div class="services_item">
          <img src="/wp-content/uploads/2022/09/line_graph.png" class="services-icon">
          <div class="services_title">Web Design</div>
          <div class="services_text">Ipsum dolor sit amet, consectetur adipiscing elit,
             sed do eiusmod tempor.</div>
        </div>
        <div class="services_item">
          <img src="/wp-content/uploads/2022/09/computer.png" class="services-icon">
          <div class="services_title">Creativity</div>
          <div class="services_text">Dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor.</div>
        </div>
      </div>
      <hr id="service-hr">
      <div class="service_content d-flex">
        <div class="services_item">
          <img src="/wp-content/uploads/2022/09/book2.png" class="services-icon">
          <div class="services_title">SEO</div>
          <div class="services_text">Ipsum dolor sit amet, consectetur adipiscing elit,
             sed do eiusmod.</div>
        </div>
        <div class="services_item">
          <img src="/wp-content/uploads/2022/09/home.png" class="services-icon">
          <div class="services_title">Css/Html</div>
          <div class="services_text">Lorem dolor sit amet, consectetur adipiscing elit, 
            sed do tempor.</div>
        </div>
        <div class="services_item">
          <img src="/wp-content/uploads/2022/09/digital.png" class="services-icon">
          <div class="services_title">Digital</div>
          <div class="services_text">Sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor.</div>
        </div>
      </div>
    </div>
</section>

<section id="unique_design">
    <div class="container">
      <div class="heading-title text-center mx-auto">
        <span>For all devices</span>
        <h2>Unique design</h2>
        <hr class="mx-auto">
      </div>
      <div class="devices">
        <img class="devices-item" src="/wp-content/uploads/2022/09/Ipad.png" alt="">
        <img class="devices-item devices-item-iphone" src="/wp-content/uploads/2022/09/Iphone.png" alt="">
      </div>
    </div>
</section>

<section id="">
    <div class="container">
      <div class="heading-title text-center mx-auto">
        <span>Service</span>
        <h2>Story About Us</h2>
        <hr class="mx-auto">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat. </p>
      </div>
      <div class="accordion">
        <div class="row">
          <div class="col-md-6">
              <div class="accordion-img-item">
                <img class="image" src="/wp-content/uploads/2022/09/accordion-img.jpg" alt="">
              </div>
          </div>
          <div class="col-md-6">

            <div id="accordion">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link title" data-image="img/accordion-img.jpg" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <img src="/wp-content/uploads/2022/09/picture.png"> Photography
                    </button>
                  </h5>
                </div>
            
                <div id="collapseOne"  class="collapse show active panel-group" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <img src="/wp-content/uploads/2022/09/equalizer.png"> Creativity
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo"  class="collapse panel-group" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed panel-group" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <img src="/wp-content/uploads/2022/09/bullseye.png"> Web Design
                    </button>
                  </h5>
                </div>
                <div id="collapseThree"  class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div> <!-- End of accrodion class -->
      </div>
    </div> <!-- End of container-->
</section>

<section id="reviews" class="gray-bg">
  <div class="container">
    <div class="reviews">
        
        <div class="reviews-image">
            <img src="/wp-content/themes/MoGo/assets/images/review-w-b.png">
        </div>
        <div class="reviews-items">
          <h4 class="reviews-text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</h4>
          <span class="reviews-author">Joshua Earle</span>          
        </div>

    </div>
  </div>
</section>

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
        $args = array('post_type' => 'team', 'post_per_page' => 3);
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
          
          
        <a href="/team"><button class="align-center">More</button></a>
  
        </div> <!-- End of row -->
        
      </div> <!-- Enf of team content -->
    </div> <!-- End of container -->
    </section>
<section id="logos" >
    <div class="container">
        <div class="logos_content">
          <div class="logos-item">
            <img src="/wp-content/themes/MoGo/assets/images/logos/1.png">
          </div>
          <div class="logos-item">
            <img src="/wp-content/themes/MoGo/assets/images/logos/2.png">
          </div>
          <div class="logos-item">
            <img src="/wp-content/themes/MoGo/assets/images/logos/3.png">
          </div>
          <div class="logos-item">
            <img src="/wp-content/themes/MoGo/assets/images/logos/4.png">
          </div>
          <div class="logos-item">
            <img src="/wp-content/themes/MoGo/assets/images/logos/5.png">
          </div>
          <div class="logos-item">
            <img src="/wp-content/themes/MoGo/assets/images/logos/6.png">
          </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
      <div class="heading-title text-center mx-auto">
        <span>What we Do</span>
        <h2>Some of our work</h2>
        <hr class="mx-auto">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat. </p>
      </div>
    </div>
    <div class="works">
      <div class="row">

        <div class="col-xs-3 col-sm-1 col-md-3 works-column p-0">
          <div class="works-item">
            <img class="works-img" src="/wp-content/themes/MoGo/assets/images/works/work_1.png">
            <div class="works-info">
              <div class="works-title">Creatively designed</div>
              <div class="works-text">Lorem Ipsum dolor sit</div>
            </div>
          </div>
          <div class="works-item">
            <img class="works-img" src="/wp-content/themes/MoGo/assets/images/works/work_2.png" alt="">
            <div class="works-info">
              <div class="works-title">Creatively designed</div>
              <div class="works-text">Lorem Ipsum dolor sit</div>
            </div>
          </div>
        </div>

        <div class="col-xs-3 col-sm-1 col-md-3 works-column p-0">
          <div class="works-item">
            <img class="works-img" src="/wp-content/themes/MoGo/assets/images/works/work_3.png" alt="">
            <div class="works-info">
              <div class="works-title">Creatively designed</div>
              <div class="works-text">Lorem Ipsum dolor sit</div>
            </div>
          </div>
          <div class="works-item">
            <img class="works-img" src="/wp-content/themes/MoGo/assets/images/works/work_4.png" alt="">
            <div class="works-info">
              <div class="works-title">Creatively designed</div>
              <div class="works-text">Lorem Ipsum dolor sit</div>
            </div>
          </div>
        </div>

        <div class="col-xs-3 col-sm-1 col-md-3 works-column p-0">
          <div class="works-item">
            <img class="works-img" src="/wp-content/themes/MoGo/assets/images/works/work_5.png" alt="">
            <div class="works-info">
              <div class="works-title">Creatively designed</div>
              <div class="works-text">Lorem Ipsum dolor sit</div>
            </div>
          </div>
        </div>

        <div class="col-xs-3 col-sm-1 col-md-3 works-column p-0">
          <div class="works-item">
            <img class="works-img" src="/wp-content/themes/MoGo/assets/images/works/work_6.png" alt="">
            <div class="works-info">
              <div class="works-title">Creatively designed</div>
              <div class="works-text">Lorem Ipsum dolor sit</div>
            </div>
          </div>
          <div class="works-item">
            <img class="works-img" src="/wp-content/themes/MoGo/assets/images/works/work_7.png" alt="">
            <div class="works-info">
              <div class="works-title">Creatively designed</div>
              <div class="works-text">Lorem Ipsum dolor sit</div>
            </div>
          </div>
        </div>
      </div>
    </div>

</section>

<section id="reviews">
  <div class="container">
    <div class="reviews">
        
        <div class="reviews-image">
            <img src="/wp-content/themes/MoGo/assets/images/reviews2.png">
        </div>
        <div class="reviews-items">
          <h4 class="reviews-text">““Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”"</h4>
          <span class="reviews-author">Jon Doe</span>          
        </div>

    </div>
  </div>
</section>

<section id="clients" class="section__clients">
    <div class="container">
      <div class="heading-title text-center mx-auto">
        <span>Happy Clients</span>
        <h2>What people say</h2>
        <hr class="mx-auto">
      </div>

      <div class="client">
        <div class="clients-item">
          <img class="clients-photo" src="/wp-content/themes/MoGo/assets/images/clients/client_1.png">
          <div class="clients-content">
            <div class="clients-name">Matthew Dix</div>
            <div class="clients-prof">Graphic Design</div>
            <div class="clients-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
          </div>
        </div>

        <div class="clients-item">
          <img class="clients-photo" src="/wp-content/themes/MoGo/assets/images/clients/client_2.png" alt="">
          <div class="clients-content">
            <div class="clients-name">Matthew Dix</div>
            <div class="clients-prof">Graphic Design</div>
            <div class="clients-text">Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>
          </div>
        </div>

        <div class="clients-item">
          <img class="clients-photo" src="/wp-content/themes/MoGo/assets/images/clients/client_3.png" alt="">
          <div class="clients-content">
            <div class="clients-name">Matthew Dix</div>
            <div class="clients-prof">Graphic Design</div>
            <div class="clients-text">Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>
          </div>
        </div>

        <div class="clients-item">
          <img class="clients-photo" src="/wp-content/themes/MoGo/assets/images/clients/client_4.png" alt="">
          <div class="clients-content">
            <div class="clients-name">Matthew Dix</div>
            <div class="clients-prof">Graphic Design</div>
            <div class="clients-text">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
          </div>
        </div>
      </div>

    </div> <!-- End of Container -->
</section>

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
	'posts_per_page' => 3,
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

<section id="map" class="section_map">
    <div class="container">
        <div class="map">
          <h2 class="map-title">
            <div><i class="fa-solid fa-location-dot"></i></div>
              <a href="https://goo.gl/maps/ghP6DkTAiDwJeQve7" target="_blank">Open Map</a>
          </h2>
        </div>
    </div>
</section>

<?php get_footer(); ?>