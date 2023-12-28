<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url(<?php echo base_url().'web-assets/images/backgrounds/01.jpg'?>)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <!-- <h2>Carer</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="<?php echo base_url()?>">Home</a></li>
               
                <li><span>/</span></li>
                <li>Career</li>
            </ul> -->
        </div>
    </div>
</section>
<!--Page Header End-->
<br><br><br>
<!--Contact One Start-->
<section class="contact-one">

    <div class="container">

        <div class="contact-one__form-box">
            <!-- <div class="career_shape zoom-fade-2">
                <img class="career_shape_img" src="<?php echo base_url().'web-assets/images/shapes/global.png'?>"
                    alt="">
            </div> -->
              <?php 
           $attributes = array('class'=> 'form','id'=>'careerform','enctype'=>'multipart/form-data');
      echo form_open('',$attributes);
  ?>
            <div class="row">
                <div class="col-xl-6">
                    <div class="col-xl-6">
                        <div class="contact-form__input-box">
                            <input type="text" placeholder="Your name" name="name">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-form__input-box">
                            <input type="email" placeholder="Email address" name="email">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-form__input-box">
                            <input type="text" placeholder="Phone number" name="phone">
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="contact-form__input-box">
                            <input type="file" name="resume">
                        </div>
                    </div>
                </div>


                <div class="col-xl-6">
                    <div class="contact-form__input-box text-message-box">
                        <textarea name="message" placeholder="Write message"></textarea>
                    </div>

                </div>
                <div class="contact-form__btn-box">
                    <button type="submit" id="career" class="thm-btn contact-form__btn" style="border-radius: 3px">Send
                        a message</button>
                </div>
            </div>
            <?php echo form_close();?>
        </div>
    </div>
    
</section>
<!--Contact One End-->