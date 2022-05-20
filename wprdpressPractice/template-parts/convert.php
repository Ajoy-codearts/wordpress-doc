
    <section class="custom-convert">
        <div class="convert-wraper">
            <div class="container">
                <div class="custom-heading-top text-center">
                    <h4><?php the_field('convert_text1',get_the_ID()); ?></h4>
                    <a href="#" class="btn custom-btn custom-btn-fill"><?php the_field('convert_button1_name',get_the_ID()); ?></a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
                <div class="custom-content">
                    <div class="distributor_section">
                        <div class="custom-heading">
                            <h3><?php the_field('convert_text2',get_the_ID()); ?></h3>
                        </div>    
                        <div class="row">                      

                            <?php while( have_rows('distribution_box') ) : the_row(); ?>
                                <?php while( have_rows('distribution_box_details') ) : the_row(); ?>
                                <div class="col-md-4">
                                <div class="portion d-flex">
                                    <div class="content-top-about d-flex align-items-center">
                                        <div class="icon_back d-flex align-items-center justify-content-center">
                                            <img src="<?php the_sub_field('distribution_box_icon'); ?>" alt="">
                                        </div>                                        
                                        <p><?php the_sub_field('distribution_box_text'); ?></p>
                                    </div>                                
                                </div>
                            </div>
                                <?php endwhile; ?>
                            <?php endwhile; ?>
                            
                        </div>
                    </div>

                    <div class="history_section">
                        <div class="custom-heading">
                            <h3><?php the_field('convert_text3',get_the_ID()); ?></h3>
                        </div>
                        <ul class="content-main convert-item">

                        <?php while( have_rows('distribution_box2') ) : the_row(); ?>
                            <?php while( have_rows('distribution_box2_details')) : the_row(); ?>
                                <li class="content-main-items">
                                    <div class="main-item-about">
                                        <div class="main-icon-back d-flex align-items-center justify-content-center">
                                            <img src="<?php the_sub_field('distribution_box2_icon'); ?>" alt="">
                                        </div>
                                        <div class="about-content">
                                            <h4><?php the_sub_field('distribution_box2_large_text'); ?></h4>
                                            <p><?php the_sub_field('distribution_box2_small_text1'); ?></p>
                                        </div>
                                    </div>
                                    <div class="main-item-details">
                                        <div class="details-content">
                                            <p><?php the_sub_field('distribution_box2_small_text2'); ?></p>
                                            <p><?php the_sub_field('distribution_box2_small_text3'); ?></p>
                                            <p><?php the_sub_field('distribution_box2_small_text4'); ?></p>
                                        </div>
                                        <a href="#"><?php the_sub_field('distribution_box2_button_name'); ?></a>                                  
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        <?php endwhile; ?>
                                 
                        </ul>
                        <div class="custom-heading-top convert-item text-center">
                            <!-- <h4>STRATO<img src="images/box.png" alt=""></h4> -->
                            <a href="#" class="btn custom-btn custom-btn-fill"><?php the_field('convert_button2_name',get_the_ID()); ?></a>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p> -->
                        </div>
                    </div>              
                </div>
            </div>
        </div>
    </section>
