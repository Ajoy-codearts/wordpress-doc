<section class="buy-nodes custom-pad">
     <div class="container">
         <div class="row">
             <div class="col-lg-6 order-lg-1 order-2 align-self-center">
                 <div class="custom-heading">
                     <h3><?php the_field('buy_nodes_heading',get_the_ID()); ?></h3>
                     <p><?php the_field('buy_nodes_text',get_the_ID()); ?></p>
                 </div>
                 <div class="bn-buy-now-starto">
                    <a href="<?php the_field('buy_nodes_button1_url',get_the_ID()); ?>" class="cs-button custom-btn-fill"><?php the_field('buy_nodes_button2_name',get_the_ID()); ?></a>

                    <a href="<?php the_field('buy_nodes_button2_url',get_the_ID()); ?>" class="cs-button custom-btn-outline"><?php the_field('buy_nodes_button2_name',get_the_ID()); ?></a>
                  </div>
             </div>
             <div class="col-lg-6 order-lg-2 order-1 align-self-center">
                <div class="buy-nodes-img text-center">
                    <img src="<?php the_field('buy_nodes_image',get_the_ID()); ?>" alt="">
                </div>
             </div>
         </div>
     </div>
 </section>