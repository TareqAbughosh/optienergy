@extends('layouts.app')
@section('content')
<section class="ls  container-px-xl-0">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-6 col-xl-7 ls ">
                <div class="special-column">
                    <div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90 divider-60"></div>
                    <h2 class="special-heading text-left">
                        <span class="text-capitalize">
                            Drop Us A Message
                        </span>
                    </h2>
                    <div class="divider-line bg-maincolor"></div>
                    <div class="fw-divider-space divider-25"></div>
                    <p class="special-heading text-left">
                        <span>
                            Have a Question? Ask Us! We'd Love to Hear from You!
                        </span>
                    </p>
                    <div class="divider-50 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <form class="contact-form" method="post" action="/">
                        <div class="row c-mb-10 c-gutter-10">
                            <div class="col-lg-6">
                                <div class="form-group has-placeholder">
                                    <label for="name335x5553">Full Name <span class="required">*</span></label>
                                    <i class="fas fa-user"></i>
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="name335x5553" class="form-control" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group has-placeholder">
                                    <label for="email333">Email address<span class="required">*</span></label>
                                    <i class="fas fa-envelope"></i>
                                    <input type="email" aria-required="true" size="30" value="" name="email" id="email333" class="form-control" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row c-mb-10 c-gutter-10">
                            <div class="col-lg-6">
                                <div class="form-group has-placeholder">
                                    <label for="name3355553">Phone Number <span class="required">*</span></label>
                                    <i class="fas fa-phone"></i>
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="name3355553" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group has-placeholder">
                                    <label for="name3355d553">Subject <span class="required">*</span></label>
                                    <i class="fas fa-paperclip"></i>
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="name3355d553" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="row c-mb-10 c-gutter-10">
                            <div class="col-sm-12">
                                <div class="form-group has-placeholder">
                                    <label for="message335553">Message</label>
                                    <i class="fas fa-edit"></i>
                                    <textarea aria-required="true" rows="8" cols="45" name="message" id="message335553" class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row c-mb-10 c-gutter-10">
                            <div class="col-sm-12 mb-0 mt-lg-50 mt-30">
                                <div class="form-group">
                                    <input class="btn btn-gradient big-btn" type="submit" value="Send message">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90 divider-60"></div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-5 text-sm-left text-center ls ms animate" data-animation="scaleAppear">
                <div class="special-column2">
                    <div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90 divider-60"></div>
                    <div class="media text-center text-sm-left">
                        <div class="icon-styled fs-60 color-main">
                            <i class="ico ico-location"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="">
                                Our Address
                            </h6>
                            <p class="">AG-PF-356, JLT, DXB, UAE.</p>
                        </div>
                    </div>
                    <div class="divider-50 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <div class="divider-line bg-maincolor text-center"></div>
                    <div class="divider-60 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <div class="media text-center text-sm-left">
                        <div class="icon-styled fs-60 color-main">
                            <i class="ico ico-call"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="">
                                Our Number
                            </h6>
                            <p class="">+971 (42) 678443</p>
                        </div>
                    </div>
                    <div class="divider-50 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <div class="divider-line bg-maincolor text-center"></div>
                    <div class="divider-60 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <div class="media text-center text-sm-left">
                        <div class="icon-styled fs-60 color-main">
                            <i class="ico ico-email"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="">
                                Our Email
                            </h6>
                            <p class="">Info@OptiEnergies.com</p>
                        </div>
                    </div>
                    <div class="divider-50 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <div class="divider-line bg-maincolor text-center"></div>
                    <div class="divider-60 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <span class="social-icons">
                        <a href="#" class="fab fa-linkedin-in bg-icon light-bg rounded-icon"></a>
                    </span>
                    <div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90 divider-60"></div>

                </div>
            </div>
            <!--.col-* -->
        </div>
    </div>
    <div class="container smaller-container mt-5">
        <h2 class="smaller-heading mb-4">Our Locations</h2>
        <div class="card mb-4">
            <div class="row no-gutters">
                <!-- Location: UAE -->
                <div class="col-md-4">
                    <img src="/images/dubai.jpeg" class="card-img img-fluid" alt="UAE">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">United Arab Emirates, Dubai</h5>
                        <p class="card-text text-muted">AG-PF-356, JLT, DXB, UAE</p>
                        <div class="row">
                            <div class="col-6">
                                <p class="card-text">Phone: +971 (42) 678443</p>
                            </div>
                            <div class="col-6">
                                <p class="card-text">Email: Info@OptiEnergies.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="row no-gutters">
                <!-- Location: Turkey -->
                <div class="col-md-4">
                    <img src="/images/turkey.jpeg" class="card-img" alt="Turkey">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Turkey</h5>
                        <p class="card-text text-muted">Istanbul Office</p>
                        <div class="row">
                            <div class="col-6">
                                <p class="card-text">Phone: +971 (42) 678443</p>
                            </div>
                            <div class="col-6">
                                <p class="card-text">Email: Info@OptiEnergies.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection