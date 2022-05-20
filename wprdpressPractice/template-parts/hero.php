<section class="custom-banner custom-pad">
  <div id="parallax-banner">
    <!-- this div for parallax effect-->
  </div>
  <div class="banner-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="custom-banner-content text-left">
                <div class="main-heading">
                  <h1><?php the_field('banner_title', get_the_ID()); ?></h1>
                  <p class="demo"><?php the_field('banner_description', get_the_ID()); ?></p>
                </div>
                <div class="custom-banner-botton mt-3">
                  <a href="<?php the_field('button_url',get_the_ID()); ?>" class="btn custom-btn custom-btn-outline banner-btn"><?php the_field('button_name', get_the_ID()); ?></a>
                  <!-- <span><i class="fas fa-user-plus"></i></span> -->
                </div>
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="banner-right-image">
            <img src=" <?php the_field('banner_map_image',get_the_ID()); ?>" alt="">
            <!-- dp-circles -->
            <span class="dp-circle dp-circle-1"></span>
            <span class="dp-circle dp-circle-2"></span>
            <span class="dp-circle dp-circle-3"></span>
            <span class="dp-circle dp-circle-4"></span>
            <span class="dp-circle dp-circle-5"></span>
            <span class="dp-circle dp-circle-6"></span>
            <span class="dp-circle dp-circle-7"></span>
            <span class="dp-circle dp-circle-8"></span>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <div class="wave-area">
    <div class="wave"></div>
    <div class="wave"></div>
  </div>
</section>
