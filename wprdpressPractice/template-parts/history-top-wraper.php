<div class="history-top-wraper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-1 order-1 align-self-center">
                   <div class="history-image">
                       <img src="<?php the_field('history_image',get_the_ID()); ?>"  alt="">
                   </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-2 align-self-center">
                   <div class="custom-heading-top history text-center">
                       <h4><?php the_field('history_text',get_the_ID()); ?></h4>
                       <div class="convert-to-strato-btn">
                           <a href="<?php the_field('history_button_url',get_the_ID()); ?>" class="cs-button custom-btn-fill" data-toggle="modal" data-target="#basicModal"><?php the_field('history_button_name',get_the_ID()); ?></a>
                       </div>
                   </div>
                </div>
            </div>
        </div>
     </div>