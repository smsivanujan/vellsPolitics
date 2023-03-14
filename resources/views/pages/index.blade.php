@extends('layout.web')

@section('content')

<section class="wrapper bg-light">
  <div class="container pt-8 pt-md-14">
    <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
      <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-1 position-relative order-lg-2" data-cue="zoomIn">
        <div class="shape bg-dot primary rellax w-17 h-19" data-rellax-speed="1" style="top: -1.7rem; left: -1.5rem;">
        </div>
        <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0"
          style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>
        <figure class="rounded"><img src="./assets/images/index1.png" srcset="./assets/images/index1@2x.png 2x"
            alt="" /></figure>
      </div>
      <!--/column -->
      <div class="col-lg-5 mt-lg-n10 text-center text-lg-start" data-cues="slideInDown" data-group="page-title"
        data-delay="600">
        <h1 class="display-1 mb-5">We bring solutions to make life easier for our customers.</h1>
        <p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0">We have considered our solutions to support every stage of
          your growth.</p>
        <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown"
          data-group="page-title-buttons" data-delay="900">
          <span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span>
          <span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Free Trial</a></span>
        </div>
      </div>
      <!--/column -->
    </div>
    <!-- /.row -->
    <div class="px-lg-5 mb-14 mb-md-17">
      <div class="row gx-0 gx-md-8 gx-xl-12 gy-8 align-items-center">
        <div class="col-4 col-md-2">
          <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="./assets/images/index1.png" alt="" /></figure>
        </div>
        <!--/column -->
        <div class="col-4 col-md-2">
          <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="./assets/images/index1.png" alt="" /></figure>
        </div>
        <!--/column -->
        <div class="col-4 col-md-2">
          <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="./assets/images/index1.png" alt="" /></figure>
        </div>
        <!--/column -->
        <div class="col-4 col-md-2">
          <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="./assets/images/index1.png" alt="" /></figure>
        </div>
        <!--/column -->
        <div class="col-4 col-md-2">
          <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="./assets/images/index1.png" alt="" /></figure>
        </div>
        <!--/column -->
        <div class="col-4 col-md-2">
          <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="./assets/images/index1.png" alt="" /></figure>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /div -->
    <div class="row">
      <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
        <h2 class="fs-15 text-uppercase text-muted mb-3">What We Do?</h2>
        <h3 class="display-4 mb-10">The service we offer is specifically designed to meet your needs.</h3>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="row gx-md-8 gy-8 text-center mb-14 mb-md-17">
      <div class="col-md-6 col-lg-3">
        <div class="icon btn btn-circle btn-lg btn-primary pe-none mb-5"> <i class="uil uil-phone-volume"></i> </div>
        <h4>24/7 Support</h4>
        <p class="mb-3">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor
          fringilla.</p>
        <a href="#" class="more hover">Learn More</a>
      </div>
      <!--/column -->
      <div class="col-md-6 col-lg-3">
        <div class="icon btn btn-circle btn-lg btn-primary pe-none mb-5"> <i class="uil uil-shield-exclamation"></i>
        </div>
        <h4>Secure Payments</h4>
        <p class="mb-3">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor
          fringilla.</p>
        <a href="#" class="more hover">Learn More</a>
      </div>
      <!--/column -->
      <div class="col-md-6 col-lg-3">
        <div class="icon btn btn-circle btn-lg btn-primary pe-none mb-5"> <i class="uil uil-laptop-cloud"></i> </div>
        <h4>Daily Updates</h4>
        <p class="mb-3">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor
          fringilla.</p>
        <a href="#" class="more hover">Learn More</a>
      </div>
      <!--/column -->
      <div class="col-md-6 col-lg-3">
        <div class="icon btn btn-circle btn-lg btn-primary pe-none mb-5"> <i class="uil uil-chart-line"></i> </div>
        <h4>Market Research</h4>
        <p class="mb-3">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor
          fringilla.</p>
        <a href="#" class="more hover">Learn More</a>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
    <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-14 mb-md-17 mb-lg-19">
      <div class="col-md-8 col-lg-6 position-relative">
        <div class="shape bg-line red rounded-circle rellax w-18 h-18" data-rellax-speed="1"
          style="top: -2.2rem; left: -2.4rem;"></div>
        <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0"
          style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
        <figure class="rounded"><img src="./assets/images/index1.png" srcset="./assets/images/index1@2x.png 2x"
            alt="" /></figure>
      </div>
      <!--/column -->
      <div class="col-lg-5 offset-lg-1">
        <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo
          odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl
          consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras
          justo
          odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl
          consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras
          justo
          odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl
          consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras
          justo
          odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl
          consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
      </div>
      <!--/column -->
      <div class="col-lg-5">
        <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo
          odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl
          consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras
          justo
          odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl
          consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras
          justo
          odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl
          consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras
          justo
          odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl
          consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
      </div>
      <!--/column -->
      <div class="col-md-8 col-lg-6 position-relative offset-lg-1">
        <div class="shape bg-line red rounded-circle rellax w-18 h-18" data-rellax-speed="1"
          style="top: -2.2rem; left: -2.4rem;"></div>
        <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0"
          style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
        <figure class="rounded"><img src="./assets/images/index1.png" srcset="./assets/images/index1@2x.png 2x"
            alt="" /></figure>
      </div>
      <!--/column -->
      <section class="wrapper bg-light">
        <figure><img src="./assets/images/banner1.png" alt="" /></figure>
        <br><br>
        <figure><img src="./assets/images/banner2.png" alt="" /></figure>
      </section>
      <!--/.row -->
      <div class="row">
        <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
          <h2 class="fs-15 text-uppercase text-muted mb-3">Latest Projects</h2>
          <h3 class="display-4 mb-10">Check out some of our awesome projects with creative ideas and great design.</h3>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="container-fluid px-md-6">
      <div class="swiper-container blog grid-view mb-17 mb-md-19" data-margin="30" data-nav="true" data-dots="true"
        data-items-xxl="2" data-items-md="2" data-items-xs="1">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <figure class="rounded"><img src="./assets/images/index1.png" alt="" /></figure>
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
              <figure class="rounded"><img src="./assets/images/index1.png" alt="" /></figure>
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
              <figure class="rounded"><img src="./assets/images/index1.png" alt="" /></figure>
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
              <figure class="rounded"><img src="./assets/images/index1.png" alt="" /></figure>
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
              <figure class="rounded"><img src="./assets/images/index1.png" alt="" /></figure>
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
              <figure class="rounded"><img src="./assets/images/index1.png" alt="" /></figure>
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
              <figure class="rounded"><img src="./assets/images/index1.png" alt="" /></figure>
            </div>
            <!--/.swiper-slide -->
          </div>
          <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
      </div>
      <!-- /.swiper-container -->
    </div>
</section>
<!-- /section -->
@endsection