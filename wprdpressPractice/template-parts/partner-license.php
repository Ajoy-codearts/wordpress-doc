<section class="partner-license custom-pad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="custom-heading">
          <h3><?php the_field('node_license_heading',get_the_ID()); ?></h3>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="strato-node-image text-center">
          <img src="<?php the_field('node_license_image',get_the_ID()); ?>" alt="">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="cloud-storage-r-buttons">
          <div class="row">
            <div class="col-lg-6 col-md-6 pr-1  align-self-center">
              <div class="cs-download-starto text-center">
                <a href="<?php the_field('node_license_button1_url',get_the_ID()); ?>" class="cs-button custom-btn-fill"><?php the_field('node_license_button1_name',get_the_ID()); ?></a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6  pl-1 align-self-center">
              <div class="cs-create-an-account text-center">

                <a href="<?php the_field('node_license_button2_url',get_the_ID()); ?>" class="cs-button custom-btn-outline"><?php the_field('node_license_button2_name',get_the_ID()); ?></a>
              </div>
            </div>
          </div>
        </div>
        <div class="license-checkboxes">
          <form class="custom-license-form">
            <div class="input-group mb-3">
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>Quantity</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
              <div class="custom-input-price">
                <label class="custom-input-group-text" for="inputGroupSelect01">$200</label>
              </div>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a> </label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">I understand that Strato Partner Nodes are not investments</label>
            </div>
            <div class="row">
              <div class="col-lg-12 align-self-center text-left">
                <div class="cs-download-license text-left">
                  <a href="#" class="cs-button custom-btn-fill">Place Order</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section> 