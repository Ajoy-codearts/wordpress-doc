<div class="history-table">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 order-lg-2 order-2 align-self-center">
                        <div class="history-list-wrap">
                            <ul class="history-list">
                            <?php while ( have_rows( 'history_table_details' ) ) : the_row(); ?>
                                <?php while ( have_rows( 'loop_details' ) ) : the_row(); ?>
                                    <li class="history-item">
                                        <div class="history-item-about">
                                            <img class="history-item-img" src="<?php the_sub_field('icon'); ?>" alt=""> 
                                            <span class="history-time"><?php the_sub_field('title'); ?></span>
                                        </div>
                                        <?php the_sub_field('description'); ?>
                                    </li>
                                <?php endwhile; ?>
                            <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
         </div>