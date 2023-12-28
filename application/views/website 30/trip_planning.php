        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg"
                style="background-image: url(<?php echo base_url().'web-assets/images/backgrounds/tripbanner.jpg'?>)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <!-- <h2>Trip Planning</h2> -->
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo base_url()?>">Home</a></li>
                        <li><span>/</span></li>
                        <li><a href="<?php echo base_url().'services'?>">Services</a></li>
                        <li><span>/</span></li>
                        <li>Trip Planning </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Services Page Start-->
        <section class="service-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="service-details__left">
                            <div class="service-details__content-box">
                                <div class="service-details__img">
                                    <img src="<?php echo base_url().'web-assets/images/services/trip.png'?>" alt="">
                                </div>
                                <h3 class="service-details__title">Trip Planning Service </h3>
                                <p class="service-details__text-1">PLEXUS has a team of experienced and trained Flight
                                    Management Executives who provide
                                    clients with the professional services required to accurately plan their Trips.</p>
                                <br>
                                <!-- <a href="<?php echo base_url().'services'?>"><button type="submit"
                                        class="btn-services">Back to Main Services</button></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">

                        <div class="service-details__right">
                            <div class="service-details__category">
                                <ul class="service-details__category-list list-unstyled">

                                    <li class="active"><a href="<?php echo base_url().'services/trip_planning'?>">Trip
                                            Planning Service
                                            <span class="fas fa-angle-right"></span></a>
                                    </li>

                                    <li><a href="<?php echo base_url().'services/flight_support'?>">Flight Support<span
                                                class="fas fa-angle-right"></span></a></li>

                                    <li><a href="<?php echo base_url().'services/flight_dispatch'?>">Flight
                                            Dispatch<span class="fas fa-angle-right"></span></a></li>

                                    <li><a href="<?php echo base_url().'services/permits'?>">Permits<span
                                                class="fas fa-angle-right"></span></a></li>

                                    <li><a href="<?php echo base_url().'services/fuel'?>">Fuel<span
                                                class="fas fa-angle-right"></span></a></li>

                                    <li><a href="<?php echo base_url().'services/aircraft_scheduling_planning'?>">Aircraft
                                            Scheduling & Planning<span class="fas fa-angle-right"></span></a></li>
                                    <li><a href="<?php echo base_url().'services/crew_support'?>">Crew Support<span
                                                class="fas fa-angle-right"></span></a></li>
                                    <li><a href="<?php echo base_url().'services/global_concierge'?>">Global
                                            Concierge<span class="fas fa-angle-right"></span></a></li>

                                </ul>

                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services Page End-->
        <!--Get Flight Start-->
        <section class="get-flight">
            <div class="container-fuild">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="get-flight__content-box">
                            <div class="section-title text-left">
                                <span class="flight">Get Your Flight</span>
                                <h2 class="trip">Request For Trip Estimate </h2>

                                <br>
                            </div>
                            <form action="#" class="get-flight__form contact-form-validated" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <!-- <label>ETA (UTC):</label> -->
                                        <div class="get-flight__form-input-box">
                                            <input type="text" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <!-- <label>ETA (UTC):</label> -->
                                        <div class="get-flight__form-input-box">
                                            <input type="text" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <!-- <label>ETA (UTC):</label> -->
                                        <div class="get-flight__form-input-box">
                                            <input type="text" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <!-- <label>ETA (UTC):</label> -->
                                        <div class="get-flight__form-input-box">
                                            <input type="text" placeholder="Departure">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="get-flight__form-input-box">
                                            <input type="text" placeholder="Destination">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="get-flight__form-input-box">
                                            <input type="text" name="time" placeholder="ETD (UTC) Departure Time">
                                            <!-- <div class="get-flight__icon-box">
                                        <i class="far fa-calendar-alt"></i>
                                    </div> -->
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="get-flight__form-input-box">
                                            <input type="text" name="time" placeholder="ETA (UTC) Arrival Time">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="get-flight__form-input-box">
                                            <div class="select-box">
                                                <select class="wide">
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
                                            <select class="wide">
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
                                            <button type="submit" class="thm-btn get-flight__btn">Submit
                                                Request</button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                            <!-- <p class="get-flight__content-text"> <span>*</span> After sending request. We’ll contact you
                        for more details about charter.</p> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img style="margin-top: -120px;width: 128%;" class="trip-img"
                            src="<?php echo base_url().'web-assets/images/resources/get-flight-img-1.png'?>" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!--Get Flight End-->