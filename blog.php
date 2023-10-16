<?php
require_once 'header.php';
?>

<div class="page-wraper">

    <!-- CONTENT START -->
    <div class="page-content" style="transform: none">
        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image: url(images/banner/1.jpg)">
            <div class="overlay-main site-bg-white opacity-01"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="wt-title">Tin Tức</h2>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->

                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="index.html">Home</a></li>
                            <li>Blog Grid</li>
                        </ul>
                    </div>

                    <!-- BREADCRUMB ROW END -->
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- OUR BLOG START -->
        <div class="section-full p-t120 p-b90 site-bg-white" style="transform: none">
            <div class="container" style="transform: none">
                <div class="row" style="transform: none">
                    <div class="col-lg-8 col-md-12">
                        <div class="masonry-wrap row d-flex" style="position: relative; height: 1866.28px">
                            <!--Block one-->
                            <div class="masonry-item col-lg-6 col-md-12"
                                style="position: absolute; left: 0px; top: 0px">
                                <?php
                                $list_of_allBlog = Blog::getAllBlog();
                                foreach ($list_of_allBlog as $post) {
                                    ?>
                                    <div class="blog-post twm-blog-post-1-outer">

                                        <div class="wt-post-media">
                                            <a href="blog-single.html"><img
                                                    src="images/blog/latest/<?php echo $post['img_blog']; ?>" alt="" /></a>
                                        </div>
                                        <div class="wt-post-info">
                                            <div class="wt-post-meta">
                                                <ul>
                                                    <li class="post-date">
                                                        <?php echo $post['ngaydang']; ?>
                                                    </li>
                                                    <li class="post-author">
                                                        By <a href="author-detail.html">
                                                            <?php echo $post['name_blog']; ?>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="wt-post-title">
                                                <h4 class="post-title">
                                                    <a href="blog-single.html">
                                                        <?php echo substr($post['tieude_blog'], 0, 50); ?>...
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="wt-post-text">
                                                <p>
                                                    <?php echo substr($post['noidung_blog'], 0, 100) ?>...
                                                </p>
                                            </div>
                                            <div class="wt-post-readmore">
                                                <a href="blog-single.html" class="site-button-link site-text-primary">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                            <!--Block two-->
                            <div class="masonry-item col-lg-6 col-md-12"
                                style="position: absolute; left: 390px; top: 0px">
                                <?php
                                $list_of_allBlog = Blog::getAllBlog();
                                foreach ($list_of_allBlog as $post) {
                                    ?>
                                    <div class="blog-post twm-blog-post-1-outer">

                                        <div class="wt-post-media">
                                            <a href="blog-single.html"><img
                                                    src="images/blog/latest/<?php echo $post['img_blog']; ?>" alt="" /></a>
                                        </div>
                                        <div class="wt-post-info">
                                            <div class="wt-post-meta">
                                                <ul>
                                                    <li class="post-date">
                                                        <?php echo $post['ngaydang']; ?>
                                                    </li>
                                                    <li class="post-author">
                                                        By <a href="author-detail.html">
                                                            <?php echo $post['name_blog']; ?>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="wt-post-title">
                                                <h4 class="post-title">
                                                    <a href="blog-single.html">
                                                        <?php echo substr($post['tieude_blog'], 0, 50); ?>...
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="wt-post-text">
                                                <p>
                                                    <?php echo substr($post['noidung_blog'], 0, 100) ?>...
                                                </p>
                                            </div>
                                            <div class="wt-post-readmore">
                                                <a href="blog-single.html" class="site-button-link site-text-primary">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                            <!--Block three-->
                            <div class="masonry-item col-lg-6 col-md-12"
                                style="position: absolute; left: 0px; top: 622.094px">
                                <?php
                                $list_of_allBlog = Blog::getAllBlog();
                                foreach ($list_of_allBlog as $post) {
                                    ?>
                                    <div class="blog-post twm-blog-post-1-outer">

                                        <div class="wt-post-media">
                                            <a href="blog-single.html"><img
                                                    src="images/blog/latest/<?php echo $post['img_blog']; ?>" alt="" /></a>
                                        </div>
                                        <div class="wt-post-info">
                                            <div class="wt-post-meta">
                                                <ul>
                                                    <li class="post-date">
                                                        <?php echo $post['ngaydang']; ?>
                                                    </li>
                                                    <li class="post-author">
                                                        By <a href="author-detail.html">
                                                            <?php echo $post['name_blog']; ?>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="wt-post-title">
                                                <h4 class="post-title">
                                                    <a href="blog-single.html">
                                                        <?php echo substr($post['tieude_blog'], 0, 50); ?>...
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="wt-post-text">
                                                <p>
                                                    <?php echo substr($post['noidung_blog'], 0, 100) ?>...
                                                </p>
                                            </div>
                                            <div class="wt-post-readmore">
                                                <a href="blog-single.html" class="site-button-link site-text-primary">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                        </div>

                        <div class="pagination-outer">
                            <div class="pagination-style1">
                                <ul class="clearfix">
                                    <li class="prev">
                                        <a href="javascript:;"><span> <i class="bi bi-chevron-left"></i> </span></a>
                                    </li>
                                    <li><a href="javascript:;">1</a></li>
                                    <li class="active"><a href="javascript:;">2</a></li>
                                    <li><a href="javascript:;">3</a></li>
                                    <li>
                                        <a class="javascript:;" href="javascript:;"><i class="bi bi-three-dots"></i></a>
                                    </li>
                                    <li><a href="javascript:;">5</a></li>
                                    <li class="next">
                                        <a href="javascript:;"><span> <i class="bi bi-chevron-right"></i>
                                            </span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 rightSidebar" style="
                  position: relative;
                  overflow: visible;
                  box-sizing: border-box;
                  min-height: 1px;
                ">
                        <div class="theiaStickySidebar" style="
                    padding-top: 0px;
                    padding-bottom: 1px;
                    position: static;
                    transform: none;
                    top: 0px;
                    left: 903px;
                  ">
                            <div class="side-bar">
                                <div class="widget search-bx">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" />
                                            <button class="btn" type="button" id="button-addon2">
                                                <i class="feather-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <div class="widget all_services_list">
                                    <h4 class="section-head-small mb-4">Categories</h4>
                                    <div class="all_services m-b30">
                                        <ul>
                                            <li>
                                                <a href="job-detail.html">Categories</a>
                                                <span class="badge">08</span>
                                            </li>
                                            <li>
                                                <a href="job-detail.html">Education</a>
                                                <span class="badge">12</span>
                                            </li>
                                            <li>
                                                <a href="job-detail.html">Information</a><span class="badge">15</span>
                                            </li>
                                            <li>
                                                <a href="job-detail.html">Jobs</a><span class="badge">25</span>
                                            </li>
                                            <li>
                                                <a href="job-detail.html">Learn</a><span class="badge">36</span>
                                            </li>
                                            <li>
                                                <a href="job-detail.html">Skill</a><span class="badge">12</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="widget recent-posts-entry">
                                    <h4 class="section-head-small mb-4">Recent Article</h4>
                                    <div class="section-content">
                                        <div class="widget-post-bx">
                                            <div class="widget-post clearfix">
                                                <div class="wt-post-media">
                                                    <img src="images/blog/recent-blog/pic1.jpg" alt="" />
                                                </div>
                                                <div class="wt-post-info">
                                                    <div class="wt-post-header">
                                                        <span class="post-date">April 08, 2023</span>
                                                        <span class="post-title">
                                                            <a href="blog-single.html">Equipment you can count on.
                                                                People you can
                                                                trust.</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="widget-post clearfix">
                                                <div class="wt-post-media">
                                                    <img src="images/blog/recent-blog/pic2.jpg" alt="" />
                                                </div>
                                                <div class="wt-post-info">
                                                    <div class="wt-post-header">
                                                        <span class="post-date">April 12, 2023</span>
                                                        <span class="post-title">
                                                            <a href="blog-single.html">Advanced Service Functions by
                                                                Air
                                                                Transport</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="widget-post clearfix">
                                                <div class="wt-post-media">
                                                    <img src="images/blog/recent-blog/pic3.jpg" alt="" />
                                                </div>
                                                <div class="wt-post-info">
                                                    <div class="wt-post-header">
                                                        <span class="post-date">April 15, 2023</span>
                                                        <span class="post-title">
                                                            <a href="blog-single.html">Proper arrangement for
                                                                keeping the goods in
                                                                the warehouse</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="widget-post clearfix">
                                                <div class="wt-post-media">
                                                    <img src="images/blog/recent-blog/pic4.jpg" alt="" />
                                                </div>
                                                <div class="wt-post-info">
                                                    <div class="wt-post-header">
                                                        <span class="post-date">April 18, 2023</span>
                                                        <span class="post-title">
                                                            <a href="blog-single.html">Equipment you can count on.
                                                                People you can
                                                                trust.</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="widget-post clearfix">
                                                <div class="wt-post-media">
                                                    <img src="images/blog/recent-blog/pic5.jpg" alt="" />
                                                </div>
                                                <div class="wt-post-info">
                                                    <div class="wt-post-header">
                                                        <span class="post-date">April 20, 2023</span>
                                                        <span class="post-title">
                                                            <a href="blog-single.html">Proper arrangement for
                                                                keeping the goods in
                                                                the warehouse</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="widget tw-sidebar-tags-wrap">
                                    <h4 class="section-head-small mb-4">Tags</h4>

                                    <div class="tagcloud">
                                        <a href="job-list.html">General</a>
                                        <a href="job-list.html">Jobs </a>
                                        <a href="job-list.html">Payment</a>
                                        <a href="job-list.html">Application </a>
                                        <a href="job-list.html">Work</a>
                                        <a href="job-list.html">Recruiting</a>
                                        <a href="job-list.html">Employer</a>
                                        <a href="job-list.html">Income</a>
                                        <a href="job-list.html">Tips</a>
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
    <!-- FOOTER END -->

    <!-- BUTTON TOP START -->
    <button class="scroltop">
        <span class="relative" id="btn-vibrate"><i class="bi bi-arrow-up-circle"></i></span>
    </button>

    <!--Model Popup Section Start-->
    <!--Signup popup -->
    <div class="modal fade twm-sign-up" id="sign_up_popup" aria-hidden="true" aria-labelledby="sign_up_popupLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h2 class="modal-title" id="sign_up_popupLabel">Sign Up</h2>
                        <p>Sign Up and get access to all the features of Jobzilla</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="twm-tabs-style-2">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <!--Signup Candidate-->
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#sign-candidate" type="button">
                                        <i class="bi bi-people"></i>Ứng Viên
                                    </button>
                                </li>
                                <!--Signup Employer-->
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sign-Employer"
                                        type="button">
                                        <i class="bi bi-building"></i>Nhà Tuyển Dụng
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <!--Signup Candidate Content-->
                                <div class="tab-pane fade show active" id="sign-candidate">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="username" type="text" required="" class="form-control"
                                                    placeholder="Usearname*" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="email" type="text" class="form-control" required=""
                                                    placeholder="Password*" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="phone" type="text" class="form-control" required=""
                                                    placeholder="Email*" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="phone" type="text" class="form-control" required=""
                                                    placeholder="Phone*" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="agree1" />
                                                    <label class="form-check-label" for="agree1">I agree to the
                                                        <a href="javascript:;">Terms and conditions</a></label>
                                                    <p>
                                                        Already registered?
                                                        <button class="twm-backto-login"
                                                            data-bs-target="#sign_up_popup2" data-bs-toggle="modal"
                                                            data-bs-dismiss="modal">
                                                            Log in here
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="site-button">
                                                Sign Up
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!--Signup Employer Content-->
                                <div class="tab-pane fade" id="sign-Employer">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="username" type="text" required="" class="form-control"
                                                    placeholder="Usearname*" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="email" type="text" class="form-control" required=""
                                                    placeholder="Password*" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="phone" type="text" class="form-control" required=""
                                                    placeholder="Email*" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="phone" type="text" class="form-control" required=""
                                                    placeholder="Phone*" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="agree2" />
                                                    <label class="form-check-label" for="agree2">I agree to the
                                                        <a href="javascript:;">Terms and conditions</a></label>
                                                    <p>
                                                        Already registered?
                                                        <button class="twm-backto-login"
                                                            data-bs-target="#sign_up_popup2" data-bs-toggle="modal"
                                                            data-bs-dismiss="modal">
                                                            Log in here
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="site-button">
                                                Sign Up
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <span class="modal-f-title">Login or Sign up with</span>
                        <ul class="twm-modal-social">
                            <li>
                                <a href="javascript" class="facebook-clr"><i class="bi bi-facebook"></i></a>
                            </li>
                            <li>
                                <a href="javascript" class="twitter-clr"><i class="bi bi-youtube"></i></a>
                            </li>
                            <li>
                                <a href="javascript" class="linkedin-clr"><i class="bi bi-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="javascript" class="google-clr"><i class="bi bi-tiktok"></i></a>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Login popup -->
    <div class="modal fade twm-sign-up" id="sign_up_popup2" aria-hidden="true" aria-labelledby="sign_up_popupLabel2"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h2 class="modal-title" id="sign_up_popupLabel2">Login</h2>
                        <p>Login and get access to all the features of Jobzilla</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="twm-tabs-style-2">
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                <!--Login Candidate-->
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#login-candidate" type="button">
                                        <i class="bi bi-people"></i>Ứng Viên
                                    </button>
                                </li>
                                <!--Login Employer-->
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#login-Employer"
                                        type="button">
                                        <i class="bi bi-building"></i>Nhà Tuyển Dụng
                                    </button>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTab2Content">
                                <!--Login Candidate Content-->
                                <div class="tab-pane fade show active" id="login-candidate">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="username" type="text" required="" class="form-control"
                                                    placeholder="Usearname*" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="email" type="text" class="form-control" required=""
                                                    placeholder="Password*" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="Password3" />
                                                    <label class="form-check-label rem-forgot" for="Password3">Remember
                                                        me
                                                        <a href="javascript:;">Forgot Password</a></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="site-button">
                                                Log in
                                            </button>
                                            <div class="mt-3 mb-3">
                                                Don't have an account ?
                                                <button class="twm-backto-login" data-bs-target="#sign_up_popup"
                                                    data-bs-toggle="modal" data-bs-dismiss="modal">
                                                    Sign Up
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Login Employer Content-->
                                <div class="tab-pane fade" id="login-Employer">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="username" type="text" required="" class="form-control"
                                                    placeholder="Usearname*" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="email" type="text" class="form-control" required=""
                                                    placeholder="Password*" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="Password4" />
                                                    <label class="form-check-label rem-forgot" for="Password4">Remember
                                                        me
                                                        <a href="javascript:;">Forgot Password</a></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="site-button">
                                                Log in
                                            </button>
                                            <div class="mt-3 mb-3">
                                                Don't have an account ?
                                                <button class="twm-backto-login" data-bs-target="#sign_up_popup"
                                                    data-bs-toggle="modal" data-bs-dismiss="modal">
                                                    Sign Up
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <span class="modal-f-title">Login or Sign up with</span>
                        <ul class="twm-modal-social">
                            <li>
                                <a href="javascript" class="facebook-clr"><i class="bi bi-facebook"></i></a>
                            </li>
                            <li>
                                <a href="javascript" class="twitter-clr"><i class="bi bi-youtube"></i></a>
                            </li>
                            <li>
                                <a href="javascript" class="linkedin-clr"><i class="bi bi-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="javascript" class="google-clr"><i class="bi bi-tiktok"></i></a>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Model Popup Section End-->
</div>

<!-- JAVASCRIPT  FILES ========================================= -->
<script src="public/js/jquery-3.6.0.min.js"></script>
<!-- JQUERY.MIN JS -->
<script src="public/js/popper.min.js"></script>
<!-- POPPER.MIN JS -->
<script src="public/js/bootstrap.min.js"></script>
<!-- BOOTSTRAP.MIN JS -->
<script src="public/js/magnific-popup.min.js"></script>
<!-- MAGNIFIC-POPUP JS -->
<script src="public/js/waypoints.min.js"></script>
<!-- WAYPOINTS JS -->
<script src="public/js/counterup.min.js"></script>
<!-- COUNTERUP JS -->
<script src="public/js/waypoints-sticky.min.js"></script>
<!-- STICKY HEADER -->
<script src="public/js/isotope.pkgd.min.js"></script>
<!-- MASONRY  -->
<script src="public/js/imagesloaded.pkgd.min.js"></script>
<!-- MASONRY  -->
<script src="public/js/owl.carousel.min.js"></script>
<!-- OWL  SLIDER  -->
<script src="public/js/theia-sticky-sidebar.js"></script>
<!-- STICKY SIDEBAR  -->
<script src="public/js/lc_lightbox.lite.js"></script>
<!-- IMAGE POPUP -->
<script src="public/js/bootstrap-select.min.js"></script>
<!-- Form js -->
<script src="public/js/dropzone.js"></script>
<!-- IMAGE UPLOAD  -->
<script src="public/js/jquery.scrollbar.js"></script>
<!-- scroller -->
<script src="public/js/bootstrap-datepicker.js"></script>
<!-- scroller -->
<script src="public/js/jquery.dataTables.min.js"></script>
<!-- Datatable -->
<script src="public/js/dataTables.bootstrap5.min.js"></script>
<!-- Datatable -->
<script src="public/js/chart.js"></script>
<!-- Chart -->
<script src="public/js/bootstrap-slider.min.js"></script>
<!-- Price range slider -->
<script src="public/js/swiper-bundle.min.js"></script>
<!-- Swiper JS -->
<script src="public/js/custom.js"></script>
<!-- CUSTOM FUCTIONS  -->
<script src="public/js/switcher.js"></script>
<!-- SHORTCODE FUCTIONS  -->
</body>

</html>