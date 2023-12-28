        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg"
                style="background-image: url(<?php echo base_url().'web-assets/images/backgrounds/se.png'?>)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <!-- <h2>Our services</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo base_url()?>">Home</a></li>
                        <li><span>/</span></li>
                        <li>Services</li>
                    </ul> -->
                </div>
            </div>
        </section>
        <!--Page Header End-->
        <!--Services Page Start-->
        <section class="services-page">
            <div class="container-fuild">
                <div class="section-title text-center">
                    <span class="section-title__tagline f-white">What<span class="b-color-size"> We’re Offering</span></span>
                    <!-- <div class="services_shape zoom-fade-2">
                        <img class="services_shape_img"
                            src="<?php echo base_url().'web-assets/images/shapes/global.png'?>" alt="">
                    </div> -->
                </div>
                <br>
                <div class="row">
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__img">
                                <img src="<?php echo base_url().'web-assets/images/services/trip.jpg'?>" alt="">
                            </div>
                            <div class="services-one__content">
                                <div class="services-one__title-box">
                                    <span class="services-one__sub-title"> Services</span>
                                    <h3 class="services-one__title"><a
                                            href="<?php echo base_url().'services/trip_planning'?>">Trip Planning </a>
                                    </h3>
                                </div>

                                <div class="services-one__arrow">
                                    <a href="<?php echo base_url().'services/trip_planning'?>"><i
                                            class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-one__single">
                            <div class="services-one__img">
                                <img src="<?php echo base_url().'web-assets/images/services/chart.png'?>" alt="">
                            </div>
                            <div class="services-one__content">
                                <div class="services-one__title-box">
                                    <span class="services-one__sub-title">Services</span>
                                    <h3 class="services-one__title"><a
                                            href="<?php echo base_url().'services/charter'?>">Charter </a>
                                    </h3>
                                </div>

                                <div class="services-one__arrow">
                                    <a href="<?php echo base_url().'services/charter'?>"><i
                                            class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="services-one__single">
                            <div class="services-one__img">
                                <img src="<?php echo base_url().'web-assets/images/backgrounds/ft.jpg'?>" alt="">
                            </div>
                            <div class="services-one__content">
                                <div class="services-one__title-box">
                                    <span class="services-one__sub-title">Services</span>
                                    <h3 class="services-one__title"><a
                                            href="<?php echo base_url().'services/training_services'?>">Training </a>
                                    </h3>
                                </div>

                                <div class="services-one__arrow">
                                    <a href="<?php echo base_url().'services/training_services'?>"><i
                                            class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->

                </div>
            </div>
        </section>
        <!--Services Page End-->
       <!--Get Flight Start-->
<section class="get-flight over-flowhidden">
    <div class="container-fuild">
        <div class="row">
            <div class="col-xl-6">
                <div class="get-flight__content-box">
                    <div class="section-title text-left">
                        <span class="flight">Get Your Flight</span>
                        <h2 class="trip">Request For Trip Estimate </h2>

                        <br>
                    </div>
                   <?php
                          $attributes = array('class' => 'form', 'id' => 'serviceform');
                              echo form_open('', $attributes);
                            ?>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <!-- <label>ETA (UTC):</label> -->
                                    <div class="get-flight__form-input-box">
                                        <input type="text" placeholder="Name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <!-- <label>ETA (UTC):</label> -->
                                    <div class="get-flight__form-input-box">
                                        <input type="text" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <!-- <label>ETA (UTC):</label> -->
                                    <div class="get-flight__form-input-box">
                                        <input type="text" placeholder="Phone" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <!-- <label>ETA (UTC):</label> -->
                                    <div class="get-flight__form-input-box">
                                        <input type="text" placeholder="Departure" name="departure">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="get-flight__form-input-box">
                                        <input type="text" placeholder="Destination" name="destination">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="get-flight__form-input-box">
                                        <input type="text" name="timed" placeholder="ETD (UTC) Departure Time">
                                        <!-- <div class="get-flight__icon-box">
                                        <i class="far fa-calendar-alt"></i>
                                    </div> -->
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="get-flight__form-input-box">
                                        <input type="text" name="timea" placeholder="ETA (UTC) Arrival Time">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="get-flight__form-input-box">
                                        <div class="select-box">
                                            <select class="wide" name="flight_purpose">
                                                <option data-display="Select Flight Purpose">Flight Purpose</option>
                                                <option value="Business">Business</option>
                                                <option value="Passenger">Passenger</option>
                                                <option value="VIP">VIP</option>
                                                <option value="Ferry">Ferry</option>
                                                <option value="Medical">Medical</option>
                                                <option value="Cargo">Cargo</option>
                                                <option value="Technical Stop">Technical Stop</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="select-box">
                                        <select class="wide" name="flight_category">
                                            <option data-display="Select Flight Category">Flight Category</option>
                                            <option value="Part_135">Part 135</option>
                                            <option value="Part 121">Part 121</option>
                                            <option value="Part_91">Part 91</option>

                                        </select>
                                    </div>

                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="get-flight__form-input-box">
                                        <input type="text" name="remark" placeholder="Remark">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <br>
                                    <div class="get-flight__form-input-box">
                                        <button type="submit" id="service" class="thm-btn get-flight__btn">Submit
                                            Request</button>
                                    </div>

                                </div>
                            </div>
                            <?php echo form_close();?>
                    <!-- <p class="get-flight__content-text"> <span>*</span> After sending request. We’ll contact you
                        for more details about charter.</p> -->
                </div>
            </div>
            <div class="col-md-6">
                <img 
                    class="trip-img" src="<?php echo base_url().'web-assets/images/resources/get-flight-img-1.png'?>" alt="">
            </div>
        </div>
    </div>
</section>
<!--Get Flight End-->