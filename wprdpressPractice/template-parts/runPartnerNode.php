<section class="run-a-partner custom-pad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="custom-heading">
          <h3><?php the_field('partner_nodes_heading',get_the_ID()); ?></h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 align-self-center">
        <div class="run-a-part-box">
          <div class="run-a-part-box-icn">
            <img src="<?php the_field('partner_nodes_left_image',get_the_ID()); ?>" alt="">
          </div>
          <div class="run-a-part-box-btn">
            <a class="" href="<?php the_field('partner_nodes_left_button_url',get_the_ID()); ?>"><?php the_field('partner_nodes_left_button_name',get_the_ID()); ?></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 align-self-center">
        <div class="run-a-part-mid">
          <div class="run-a-part-mid-img">
            <img src="<?php the_field('partner_nodes_image',get_the_ID()); ?>" alt="">
          </div>
          <div class="run-a-part-mid-content">
            <a href="<?php the_field('partner_nodes_button_url',get_the_ID()); ?>" class="cs-button custom-btn-fill"><?php the_field('partner_nodes_button_name',get_the_ID()); ?></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 align-self-center">
        <div class="run-a-part-box">
          <div class="run-a-part-box-icn">
            <img src="<?php the_field('partner_nodes_right_image',get_the_ID()); ?>" alt="">
          </div>
          <div class="run-a-part-box-btn">
            <a href="<?php the_field('partner_nodes_right_button_url',get_the_ID()); ?>"><?php the_field('partner_nodes_right_button_name',get_the_ID()); ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>