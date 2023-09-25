<?php
require_once 'header.php';

require_once 'config.php';
?>

<!-- CONTENT START -->
<div class="page-content">
  <!--Banner Start-->
  <div class="twm-home1-banner-section site-bg-gray bg-cover" style="background-image: url(images/main-slider/slider1/bg1.jpg)">
    <div class="row">
      <!--Left Section-->
      <div class="col-xl-6 col-lg-6 col-md-12">
        <div class="twm-bnr-left-section">
          <div class="twm-bnr-title-small">
            We Have <span class="site-text-primary">208,000+</span> Live
            Jobs
          </div>
          <div class="twm-bnr-title-large">
            Find the <span class="site-text-primary">job</span> that fits
            your life
          </div>
          <div class="twm-bnr-discription">
            Type your keyword, then click search to find your perfect job.
          </div>

          <div class="twm-bnr-search-bar">
            <form>
              <div class="row">
                <!--Title-->
                <div class="form-group col-xl-3 col-lg-6 col-md-6">
                  <label>What</label>
                  <select class="wt-search-bar-select selectpicker" data-live-search="true" title="" id="j-Job_Title" data-bv-field="size">
                    <option disabled selected value="">
                      Select Category
                    </option>
                    <option selected>Job Title</option>
                    <option>Web Designer</option>
                    <option>Developer</option>
                    <option>Acountant</option>
                  </select>
                </div>

                <!--All Category-->
                <div class="form-group col-xl-3 col-lg-6 col-md-6">
                  <label>Type</label>
                  <select class="wt-search-bar-select selectpicker" data-live-search="true" title="" id="j-All_Category" data-bv-field="size">
                    <option disabled selected value="">
                      Select Category
                    </option>
                    <option selected>All Category</option>
                    <option>Web Designer</option>
                    <option>Developer</option>
                    <option>Acountant</option>
                  </select>
                </div>

                <!--Location-->
                <div class="form-group col-xl-3 col-lg-6 col-md-6">
                  <label>Location</label>
                  <div class="twm-inputicon-box">
                    <input name="username" type="text" required class="form-control" placeholder="Search..." />
                    <i class="twm-input-icon bi bi-geo-alt"></i>
                  </div>
                </div>

                <!--Find job btn-->
                <div class="form-group col-xl-3 col-lg-6 col-md-6">
                  <button type="button" class="site-button">
                    Find Job
                  </button>
                </div>
              </div>
            </form>
          </div>

          <div class="twm-bnr-popular-search">
            <span class="twm-title">Popular Searches:</span>
            <a href="job-list.html">Developer</a> ,
            <a href="job-list.html">Designer</a> ,
            <a href="job-list.html">Architect</a> ,
            <a href="job-list.html">Engineer</a> ...
          </div>
        </div>
      </div>

      <!--right Section-->
      <div class="col-xl-6 col-lg-6 col-md-12 twm-bnr-right-section">
        <div class="twm-bnr-right-content">
          <div class="twm-img-bg-circle-area">
            <div class="twm-img-bg-circle1 rotate-center">
              <span></span>
            </div>
            <div class="twm-img-bg-circle2 rotate-center-reverse">
              <span></span>
            </div>
            <div class="twm-img-bg-circle3"><span></span></div>
          </div>

          <div class="twm-bnr-right-carousel">
            <div class="owl-carousel twm-h1-bnr-carousal">
              <div class="item">
                <div class="slide-img">
                  <img src="images/main-slider/slider1/r-img1.png" alt="#" />
                </div>
              </div>
              <div class="item">
                <div class="slide-img">
                  <div class="slide-img">
                    <img src="images/main-slider/slider1/r-img2.png" alt="#" />
                  </div>
                </div>
              </div>
            </div>

            <div class="twm-bnr-blocks-position-wrap">
              <!--icon-block-1-->
              <div class="twm-bnr-blocks twm-bnr-blocks-position-1">
                <div class="twm-icon">
                  <img src="images/main-slider/slider1/icon-1.png" alt="" />
                </div>
                <div class="twm-content">
                  <div class="tw-count-number text-clr-sky">
                    <span class="counter">12</span>K+
                  </div>
                  <p class="icon-content-info">Companies Jobs</p>
                </div>
              </div>

              <!--icon-block-2-->
              <div class="twm-bnr-blocks twm-bnr-blocks-position-2">
                <div class="twm-icon">
                  <img src="images/main-slider/slider1/icon-2.png" alt="" />
                </div>
                <div class="twm-content">
                  <div class="tw-count-number text-clr-pink">
                    <span class="counter">98</span> +
                  </div>
                  <p class="icon-content-info">Job For Countries</p>
                </div>
              </div>

              <!--icon-block-3-->
              <div class="twm-bnr-blocks-3 twm-bnr-blocks-position-3">
                <div class="twm-pics">
                  <span><img src="images/main-slider/slider1/user/u-1.jpg" alt="" /></span>
                  <span><img src="images/main-slider/slider1/user/u-2.jpg" alt="" /></span>
                  <span><img src="images/main-slider/slider1/user/u-3.jpg" alt="" /></span>
                  <span><img src="images/main-slider/slider1/user/u-4.jpg" alt="" /></span>
                  <span><img src="images/main-slider/slider1/user/u-5.jpg" alt="" /></span>
                  <span><img src="images/main-slider/slider1/user/u-6.jpg" alt="" /></span>
                </div>
                <div class="twm-content">
                  <div class="tw-count-number text-clr-green">
                    <span class="counter">3</span>K+
                  </div>
                  <p class="icon-content-info">Jobs Done</p>
                </div>
              </div>
            </div>
          </div>

          <!--Samll Ring Left-->
          <div class="twm-small-ring-l slide-top-animation"></div>
          <div class="twm-small-ring-2 slide-top-animation"></div>
        </div>
      </div>
    </div>
    <div class="twm-gradient-text">Jobs</div>
  </div>
  <!--Banner End-->

  <!-- HOW IT WORK SECTION START -->
  <div class="section-full p-t120 p-b90 site-bg-white twm-how-it-work-area">
    <div class="container">
      <!-- TITLE START-->
      <div class="section-head center wt-small-separator-outer">
        <div class="wt-small-separator site-text-primary">
          <div>Working Process</div>
        </div>
        <h2 class="wt-title">How It Works</h2>
      </div>
      <!-- TITLE END-->

      <div class="twm-how-it-work-section">
        <div class="row">
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="twm-w-process-steps">
              <span class="twm-large-number">01</span>
              <div class="twm-w-pro-top bg-clr-sky">
                <div class="twm-media">
                  <span><img src="images/work-process/icon1.png" alt="icon1" /></span>
                </div>
                <h4 class="twm-title">Register<br />Your Account</h4>
              </div>
              <p>
                You need to create an account to find the best and
                preferred job.
              </p>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="twm-w-process-steps">
              <span class="twm-large-number">02</span>
              <div class="twm-w-pro-top bg-clr-pink">
                <div class="twm-media">
                  <span><img src="images/work-process/icon2.png" alt="icon1" /></span>
                </div>
                <h4 class="twm-title">
                  Apply <br />
                  For Dream Job
                </h4>
              </div>
              <p>
                You need to create an account to find the best and
                preferred job.
              </p>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="twm-w-process-steps">
              <span class="twm-large-number">03</span>
              <div class="twm-w-pro-top bg-clr-green">
                <div class="twm-media">
                  <span><img src="images/work-process/icon3.png" alt="icon1" /></span>
                </div>
                <h4 class="twm-title">Upload <br />Your Resume</h4>
              </div>
              <p>
                You need to create an account to find the best and
                preferred job.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="twm-company-approch-outer">
    <div class="twm-company-approch">
      <div class="row">
        <!--block 1-->
        <div class="col-lg-4 col-md-12">
          <div class="counter-outer-two">
            <div class="icon-content">
              <div class="tw-count-number text-clr-sky">
                <span class="counter">5</span>M+
              </div>
              <p class="icon-content-info">Million daily active users</p>
            </div>
          </div>
        </div>

        <!--block 2-->
        <div class="col-lg-4 col-md-12">
          <div class="counter-outer-two">
            <div class="icon-content">
              <div class="tw-count-number text-clr-pink">
                <span class="counter">9</span>K+
              </div>
              <p class="icon-content-info">Open job positions</p>
            </div>
          </div>
        </div>

        <!--block 3-->
        <div class="col-lg-4 col-md-12">
          <div class="counter-outer-two">
            <div class="icon-content">
              <div class="tw-count-number text-clr-green">
                <span class="counter">2</span>M+
              </div>
              <p class="icon-content-info">Million stories shared</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- HOW IT WORK SECTION END -->

  <!-- JOB POST START -->
  <section class="job-section alternate">
    <div class="auto-container">
      <div class="sec-title text-center">
        <h2>Most Popular Jobs</h2>
      </div>

      <div class="default-tabs tabs-box">
        <!--Tabs Box-->
        <ul class="tab-buttons">
          <li class="tab-btn active-btn" data-tab="#tab1">All</li>
          <li class="tab-btn" data-tab="#tab2">Việc Làm Tại Việt Nam</li>
          <li class="tab-btn" data-tab="#tab3">XKLD Nhật Bản</li>
          <li class="tab-btn" data-tab="#tab4">
            Kỹ Sư & Thông Dịch Tại Nhật Bản
          </li>
        </ul>

        <div class="tabs-content wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp">
          <!--Tab-->
          <div class="tab active-tab animated fadeIn" id="tab1" style="display: block">
            <div class="row">
              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>

              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>

              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>

              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>

              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>

              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--Tab-->
          <div class="tab" id="tab2" style="display: none">
            <div class="row">
              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>

              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>

              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>

              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>

              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>

              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--Tab-->
          <div class="tab" id="tab3" style="display: none">
            <div class="row">
              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>

              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>

              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>

              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>

              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>

              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--Tab-->
          <div class="tab" id="tab4" style="display: none">
            <div class="row">
              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>

              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>

              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>

              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>

              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>

              <!-- Job Block -->
              <div class="job-block col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="company-logo"><img src="images/jobs-company/pic1.jpg" alt="" /></span>
                    <h4>
                      <a href="#">Software Engineer (Android), Libraries</a>
                    </h4>
                    <ul class="job-info">
                      <li>
                        <span class="icon bi bi-briefcase"></span>
                        Segment
                      </li>
                      <li>
                        <span class="icon bi bi-geo-al"></span>
                        London, UK
                      </li>
                      <li>
                        <span class="icon bi bi-clock"></span> 11 hours
                        ago
                      </li>
                      <li>
                        <span class="icon bi bi-cash-coin"></span> $35k -
                        $45k
                      </li>
                    </ul>
                    <ul class="job-other-info">
                      <li class="time">Full Time</li>
                      <li class="privacy">Private</li>
                      <li class="required">Urgent</li>
                    </ul>
                    <!-- 
                          <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- JOB POST END -->

  <!-- EXPLORE NEW LIFE START -->
  <div class="section-full p-t120 p-b120 twm-explore-area bg-cover" style="background-image: url(images/background/bg-1.jpg)">
    <div class="container">
      <div class="section-content">
        <div class="row">
          <div class="col-lg-4 col-md-12">
            <div class="twm-explore-media-wrap">
              <div class="twm-media">
                <img src="images/gir-large.png" alt="" />
              </div>
            </div>
          </div>

          <div class="col-lg-8 col-md-12">
            <div class="twm-explore-content-outer">
              <div class="twm-explore-content">
                <div class="twm-l-line-1"></div>
                <div class="twm-l-line-2"></div>

                <div class="twm-r-circle-1"></div>
                <div class="twm-r-circle-2"></div>

                <div class="twm-title-small">Explore New Life</div>
                <div class="twm-title-large">
                  <h2>
                    Don’t just find. be found put your CV in front of
                    great employers
                  </h2>
                  <p>
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry the standard dummy text ever
                    since the when an printer took.
                  </p>
                </div>
                <div class="twm-upload-file">
                  <button type="button" class="site-button">
                    Upload Your Resume <i class="feather-upload"></i>
                  </button>
                </div>
              </div>
              <div class="twm-bold-circle-right"></div>
              <div class="twm-bold-circle-left"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- EXPLORE NEW LIFE END -->

  <!-- TOP COMPANIES START -->
  <div class="section-full p-t120 site-bg-white twm-companies-wrap">
    <!-- TITLE START-->
    <div class="section-head center wt-small-separator-outer">
      <div class="wt-small-separator site-text-primary">
        <div>Top Companies</div>
      </div>
      <h2 class="wt-title">Get hired in top companies</h2>
    </div>
    <!-- TITLE END-->

    <div class="container">
      <div class="section-content">
        <div class="owl-carousel home-client-carousel2 owl-btn-vertical-center">
          <div class="item">
            <div class="ow-client-logo">
              <div class="client-logo client-logo-media">
                <a href="employer-list.html"><img src="images/client-logo/w1.png" alt="" /></a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="ow-client-logo">
              <div class="client-logo client-logo-media">
                <a href="employer-list.html"><img src="images/client-logo/w2.png" alt="" /></a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="ow-client-logo">
              <div class="client-logo client-logo-media">
                <a href="employer-list.html"><img src="images/client-logo/w3.png" alt="" /></a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="ow-client-logo">
              <div class="client-logo client-logo-media">
                <a href="employer-list.html"><img src="images/client-logo/w4.png" alt="" /></a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="ow-client-logo">
              <div class="client-logo client-logo-media">
                <a href="employer-list.html"><img src="images/client-logo/w5.png" alt="" /></a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="ow-client-logo">
              <div class="client-logo client-logo-media">
                <a href="employer-list.html"><img src="images/client-logo/w6.png" alt="" /></a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="ow-client-logo">
              <div class="client-logo client-logo-media">
                <a href="employer-list.html"><img src="images/client-logo/w1.png" alt="" /></a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="ow-client-logo">
              <div class="client-logo client-logo-media">
                <a href="employer-list.html"><img src="images/client-logo/w2.png" alt="" /></a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="ow-client-logo">
              <div class="client-logo client-logo-media">
                <a href="employer-list.html"><img src="images/client-logo/w3.png" alt="" /></a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="ow-client-logo">
              <div class="client-logo client-logo-media">
                <a href="employer-list.html"><img src="images/client-logo/w5.png" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- TOP COMPANIES END -->

  <!-- TESTIMONIAL SECTION START -->
  <div class="section-full p-t120 p-b90 site-bg-white twm-testimonial-1-area">
    <div class="container">
      <div class="wt-separator-two-part">
        <div class="row wt-separator-two-part-row">
          <div class="col-xl-5 col-lg-6 col-md-12 wt-separator-two-part-left">
            <!-- TITLE START-->
            <div class="section-head left wt-small-separator-outer">
              <div class="wt-small-separator site-text-primary">
                <div>Clients Testimonials</div>
              </div>
              <h2 class="wt-title">What Our Customers Say About Us</h2>
            </div>
            <!-- TITLE END-->
          </div>
        </div>
      </div>

      <div class="section-content">
        <div class="owl-carousel twm-testimonial-1-carousel owl-btn-bottom-center">
          <!-- COLUMNS 1 -->
          <div class="item">
            <div class="twm-testimonial-1">
              <div class="twm-testimonial-1-content">
                <div class="twm-testi-media">
                  <img src="images/testimonials/pic-1.png" alt="#" />
                </div>
                <div class="twm-testi-content">
                  <div class="twm-quote">
                    <img src="images/quote-dark.png" alt="" />
                  </div>
                  <div class="twm-testi-info">
                    I just got a job that I applied for via careerfy! I
                    used the site all the time during my job hunt.
                  </div>
                  <div class="twm-testi-detail">
                    <div class="twm-testi-name">Nikola Tesla</div>
                    <div class="twm-testi-position">Accountant</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- COLUMNS 2 -->
          <div class="item">
            <div class="twm-testimonial-1">
              <div class="twm-testimonial-1-content">
                <div class="twm-testi-media">
                  <img src="images/testimonials/pic-2.png" alt="#" />
                </div>
                <div class="twm-testi-content">
                  <div class="twm-quote">
                    <img src="images/quote-dark.png" alt="" />
                  </div>
                  <div class="twm-testi-info">
                    I just got a job that I applied for via careerfy! I
                    used the site all the time during my job hunt.
                  </div>
                  <div class="twm-testi-detail">
                    <div class="twm-testi-name">Nikola Tesla</div>
                    <div class="twm-testi-position">Accountant</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- COLUMNS 3 -->
          <div class="item">
            <div class="twm-testimonial-1">
              <div class="twm-testimonial-1-content">
                <div class="twm-testi-media">
                  <img src="images/testimonials/pic-3.png" alt="#" />
                </div>
                <div class="twm-testi-content">
                  <div class="twm-quote">
                    <img src="images/quote-dark.png" alt="" />
                  </div>
                  <div class="twm-testi-info">
                    I just got a job that I applied for via careerfy! I
                    used the site all the time during my job hunt.
                  </div>
                  <div class="twm-testi-detail">
                    <div class="twm-testi-name">Nikola Tesla</div>
                    <div class="twm-testi-position">Accountant</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- COLUMNS 4 -->
          <div class="item">
            <div class="twm-testimonial-1">
              <div class="twm-testimonial-1-content">
                <div class="twm-testi-media">
                  <img src="images/testimonials/pic-2.png" alt="#" />
                </div>
                <div class="twm-testi-content">
                  <div class="twm-quote">
                    <img src="images/quote-dark.png" alt="" />
                  </div>
                  <div class="twm-testi-info">
                    I just got a job that I applied for via careerfy! I
                    used the site all the time during my job hunt.
                  </div>
                  <div class="twm-testi-detail">
                    <div class="twm-testi-name">Nikola Tesla</div>
                    <div class="twm-testi-position">Accountant</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- COLUMNS 5 -->
          <div class="item">
            <div class="twm-testimonial-1">
              <div class="twm-testimonial-1-content">
                <div class="twm-testi-media">
                  <img src="images/testimonials/pic-1.png" alt="#" />
                </div>
                <div class="twm-testi-content">
                  <div class="twm-quote">
                    <img src="images/quote-dark.png" alt="" />
                  </div>
                  <div class="twm-testi-info">
                    I just got a job that I applied for via careerfy! I
                    used the site all the time during my job hunt.
                  </div>
                  <div class="twm-testi-detail">
                    <div class="twm-testi-name">Nikola Tesla</div>
                    <div class="twm-testi-position">Accountant</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- TESTIMONIAL SECTION END -->

  <!-- OUR BLOG START -->
  <div class="section-full p-t120 p-b90 site-bg-gray">
    <div class="container">
      <!-- TITLE START-->
      <div class="section-head center wt-small-separator-outer">
        <div class="wt-small-separator site-text-primary">
          <div>Our Blogs</div>
        </div>
        <h2 class="wt-title">Latest Article</h2>
      </div>
      <!-- TITLE END-->

      <div class="section-content">
        <div class="twm-blog-post-1-outer-wrap">
          <div class="owl-carousel twm-la-home-blog owl-btn-bottom-center">
            <div class="item">
              <!--Block one-->
              <div class="blog-post twm-blog-post-1-outer">
                <div class="wt-post-media">
                  <a href="blog-single.html"><img src="images/blog/latest/bg1.jpg" alt="" /></a>
                </div>
                <div class="wt-post-info">
                  <div class="wt-post-meta">
                    <ul>
                      <li class="post-date">March 05, 2023</li>
                      <li class="post-author">
                        By <a href="candidate-detail.html">Mark Petter</a>
                      </li>
                    </ul>
                  </div>
                  <div class="wt-post-title">
                    <h4 class="post-title">
                      <a href="blog-single.html">How to convince recruiters and get your dream
                        job</a>
                    </h4>
                  </div>
                  <div class="wt-post-text">
                    <p>
                      New chip traps clusters of migrating tumor cells
                      asperiortenetur, blanditiis odit.
                    </p>
                  </div>
                  <div class="wt-post-readmore">
                    <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="item">
              <!--Block two-->
              <div class="blog-post twm-blog-post-1-outer">
                <div class="wt-post-media">
                  <a href="blog-single.html"><img src="images/blog/latest/bg2.jpg" alt="" /></a>
                </div>
                <div class="wt-post-info">
                  <div class="wt-post-meta">
                    <ul>
                      <li class="post-date">March 05, 2023</li>
                      <li class="post-author">
                        By <a href="candidate-detail.html">David Wish</a>
                      </li>
                    </ul>
                  </div>
                  <div class="wt-post-title">
                    <h4 class="post-title">
                      <a href="blog-single.html">5 things to know about the March 2023 jobs
                        report</a>
                    </h4>
                  </div>
                  <div class="wt-post-text">
                    <p>
                      New chip traps clusters of migrating tumor cells
                      asperiortenetur, blanditiis odit.
                    </p>
                  </div>
                  <div class="wt-post-readmore">
                    <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="item">
              <!--Block three-->
              <div class="blog-post twm-blog-post-1-outer">
                <div class="wt-post-media">
                  <a href="blog-single.html"><img src="images/blog/latest/bg3.jpg" alt="" /></a>
                </div>
                <div class="wt-post-info">
                  <div class="wt-post-meta">
                    <ul>
                      <li class="post-date">March 05, 2023</li>
                      <li class="post-author">
                        By <a href="candidate-detail.html">Mike Doe</a>
                      </li>
                    </ul>
                  </div>
                  <div class="wt-post-title">
                    <h4 class="post-title">
                      <a href="blog-single.html">Job Board is the most important sector in the
                        world</a>
                    </h4>
                  </div>
                  <div class="wt-post-text">
                    <p>
                      New chip traps clusters of migrating tumor cells
                      asperiortenetur, blanditiis odit.
                    </p>
                  </div>
                  <div class="wt-post-readmore">
                    <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="item">
              <!--Block Four-->
              <div class="blog-post twm-blog-post-1-outer">
                <div class="wt-post-media">
                  <a href="blog-single.html"><img src="images/blog/latest/bg1.jpg" alt="" /></a>
                </div>
                <div class="wt-post-info">
                  <div class="wt-post-meta">
                    <ul>
                      <li class="post-date">March 05, 2023</li>
                      <li class="post-author">
                        By <a href="candidate-detail.html">Mark Petter</a>
                      </li>
                    </ul>
                  </div>
                  <div class="wt-post-title">
                    <h4 class="post-title">
                      <a href="blog-single.html">How to convince recruiters and get your dream
                        job</a>
                    </h4>
                  </div>
                  <div class="wt-post-text">
                    <p>
                      New chip traps clusters of migrating tumor cells
                      asperiortenetur, blanditiis odit.
                    </p>
                  </div>
                  <div class="wt-post-readmore">
                    <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="item">
              <!--Block Five-->
              <div class="blog-post twm-blog-post-1-outer">
                <div class="wt-post-media">
                  <a href="blog-single.html"><img src="images/blog/latest/bg2.jpg" alt="" /></a>
                </div>
                <div class="wt-post-info">
                  <div class="wt-post-meta">
                    <ul>
                      <li class="post-date">March 05, 2023</li>
                      <li class="post-author">
                        By <a href="candidate-detail.html">David Wish</a>
                      </li>
                    </ul>
                  </div>
                  <div class="wt-post-title">
                    <h4 class="post-title">
                      <a href="blog-single.html">5 things to know about the March 2023 jobs
                        report</a>
                    </h4>
                  </div>
                  <div class="wt-post-text">
                    <p>
                      New chip traps clusters of migrating tumor cells
                      asperiortenetur, blanditiis odit.
                    </p>
                  </div>
                  <div class="wt-post-readmore">
                    <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="item">
              <!--Block Six-->
              <div class="blog-post twm-blog-post-1-outer">
                <div class="wt-post-media">
                  <a href="blog-single.html"><img src="images/blog/latest/bg3.jpg" alt="" /></a>
                </div>
                <div class="wt-post-info">
                  <div class="wt-post-meta">
                    <ul>
                      <li class="post-date">March 05, 2023</li>
                      <li class="post-author">
                        By <a href="candidate-detail.html">Mike Doe</a>
                      </li>
                    </ul>
                  </div>
                  <div class="wt-post-title">
                    <h4 class="post-title">
                      <a href="blog-single.html">Job Board is the most important sector in the
                        world</a>
                    </h4>
                  </div>
                  <div class="wt-post-text">
                    <p>
                      New chip traps clusters of migrating tumor cells
                      asperiortenetur, blanditiis odit.
                    </p>
                  </div>
                  <div class="wt-post-readmore">
                    <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- OUR BLOG END -->
</div>
<!-- CONTENT END -->

<?php
require_once 'footer.php';
?>