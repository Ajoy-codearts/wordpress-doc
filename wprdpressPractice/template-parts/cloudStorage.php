<section class="cloud-storage-sb custom-pad">
  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        <div class="custom-heading">
          <h3><?php the_field('cloud_heading',get_the_ID()); ?></h3>
        </div>
      </div>
    </div>
 
    <div class="row">
      <div class="col-lg-6 align-self-center">
        <div class="cloud-storage-left">
          <img src="<?php the_field('cloud_image', get_the_ID()); ?>" alt="">
        </div>
      </div>
      <div class="col-lg-6 align-self-center">
        <div class="cloud-storage-right">
          <div class="cloud-storage-r-heading">
            <h4><?php the_field('cloud_text',get_the_ID()); ?></h4>
          </div>
          <div class="cloud-storage-r-buttons">
            <div class="row">
              <div class="col-lg-6 col-md-6 pr-1  align-self-center">
                <div class="cs-download-starto text-center">
                  <a href="<?php the_field('cloud_button1_url', get_the_ID()); ?>" class="cs-button custom-btn-fill"><?php the_field('cloud_button1_name',get_the_ID()); ?></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6  pl-1 align-self-center">
                <div class="cs-create-an-account text-center">
                  <a href="<?php the_field('cloud_button2_url', get_the_ID()); ?>" class="cs-button custom-btn-outline"><?php the_field('cloud_button2_name',get_the_ID()); ?></a>

                </div>
              </div>
            </div>
          </div>
          <div class="cloud-storage-r-box">
            <!-- partial:index.partial.html -->
            <form class="cs-upload-box" action="upload.php" method="POST">
              <div class="cs-upload-box-wrap">
                <input class="drag-n-drop-input" type="file" multiple>
                <p>
                  <span class="drag-n-drop-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drag-n-drop-icon.png" alt="">
                  </span> 
                  Drag & drop header
                </p>
                <div class="custom_upload text-center mt-3">
                  <label for="upload">
                    <input type="file" name="" id="upload">
                    <span>upload</span>
                  </label>
                </div>
              </div>
             
              <button class="cs-button custom-btn-fill" type="submit">Upload</button>
            </form>
            

          </div>
          <div class="cloud-storage-r-heading"></div>
          <div class="cloud-storage-r-heading"></div>
        </div>

      </div>
    </div>
  </div>
</section>