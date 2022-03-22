@extends('frontend.main_master')
@section('main')

@section('title')
About | EasyLearning Website
@endsection

<main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb__wrap">
                <div class="container custom-container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="breadcrumb__wrap__content">
                                <h2 class="title">About me</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About Me</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb__wrap__icon">
                    <ul>
                        <li><img src="assets/img/icons/breadcrumb_icon01.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon02.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon03.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon04.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon05.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon06.png" alt=""></li>
                    </ul>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- about-area -->
<section class="about about__style__two">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="about__image">
    <img src="{{ $aboutpage->about_image }}" alt="">
</div>
</div>
<div class="col-lg-6">
<div class="about__content">
    <div class="section__title">
        <span class="sub-title">01 - About me</span>
        <h2 class="title">{{ $aboutpage->title }}</h2>
    </div>
    <div class="about__exp">
        <div class="about__exp__icon">
            <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }} " alt="">
        </div>
        <div class="about__exp__content">
            <p><span>{{ $aboutpage->short_title }}</span> </p>
        </div>
    </div>
    <p class="desc">{{ $aboutpage->short_description }}</p>
    <a href="about.html" class="btn">Download my resume</a>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="about__info__wrap">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button"
                role="tab" aria-controls="about" aria-selected="true">About</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button"
                role="tab" aria-controls="skills" aria-selected="false">Skills</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="awards-tab" data-bs-toggle="tab" data-bs-target="#awards" type="button"
                role="tab" aria-controls="awards" aria-selected="false">awards</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education" type="button"
                role="tab" aria-controls="education" aria-selected="false">education</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
            <p class="desc">

{!! $aboutpage->long_description !!}

             </p>
                </li>
            </ul>
        </div>
        <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
            <div class="about__skill__wrap">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">Communication</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><span class="percentage">70%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">Brain Storming</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><span class="percentage">90%</span></div>
                            </div>
                                                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">Resourcefulness</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span class="percentage">50%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">Figma</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span class="percentage">65%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">Analytical Abilities</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><span class="percentage">80%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">Skeatch</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"><span class="percentage">45%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">User Research</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"><span class="percentage">55%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">Adobe Tools</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percentage">85%</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">
            <div class="about__award__wrap">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-sm-9">
                        <div class="about__award__item">
                            <div class="award__logo">
                                <img src="assets/img/images/awards_01.png" alt="">
                            </div>
                            <div class="award__content">
                                <h5 class="title">Best ux designer award in 2002</h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-9">
                        <div class="about__award__item">
                            <div class="award__logo">
                                <img src="assets/img/images/awards_02.png" alt="">
                            </div>
                            <div class="award__content">
                                <h5 class="title">BBA final examination 2001</h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-9">
                        <div class="about__award__item">
                            <div class="award__logo">
                                <img src="assets/img/images/awards_03.png" alt="">
                            </div>
                            <div class="award__content">
                                <h5 class="title">User research award 2020</h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-9">
                        <div class="about__award__item">
                            <div class="award__logo">
                                <img src="assets/img/images/awards_04.png" alt="">
                            </div>
                            <div class="award__content">
                                <h5 class="title">Dsigning award 2021</h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
            <div class="about__education__wrap">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about__education__item">
                            <h3 class="title">DPR Engineering Dhaka University</h3>
                            <span class="date">2004 – 2016</span>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__education__item">
                            <h3 class="title">Product Designer at google</h3>
                            <span class="date">2021 – Present</span>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__education__item">
                            <h3 class="title">Computer Science - england</h3>
                            <span class="date">2008 – 2012</span>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__education__item">
                            <h3 class="title">Pro product design with udemey</h3>
                            <span class="date">2016 - 2020</span>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- about-area-end -->

<!-- services-area -->
<section class="services__style__two">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6 col-md-8">
<div class="section__title text-center">
    <span class="sub-title">02 - my Services</span>
    <h2 class="title">Provide awesome service</h2>
</div>
</div>
</div>
<div class="services__style__two__wrap">
<div class="row gx-0">
<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="services__style__two__item">
        <div class="services__style__two__icon">
            <img src="assets/img/icons/services_light_icon01.png" alt="">
        </div>
        <div class="services__style__two__content">
            <h3 class="title"><a href="services-details.html">Business Strategy</a></h3>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
            <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="services__style__two__item">
        <div class="services__style__two__icon">
            <img src="assets/img/icons/services_light_icon02.png" alt="">
        </div>
        <div class="services__style__two__content">
            <h3 class="title"><a href="services-details.html">Visual Design</a></h3>
            <p>Strategy is a forward-looking plan for your brand’s behavior.Strategy is a forward-looking plan.</p>
            <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="services__style__two__item">
        <div class="services__style__two__icon">
            <img src="assets/img/icons/services_light_icon03.png" alt="">
        </div>
        <div class="services__style__two__content">
            <h3 class="title"><a href="services-details.html">Product Design</a></h3>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
            <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="services__style__two__item">
        <div class="services__style__two__icon">
            <img src="assets/img/icons/services_light_icon05.png" alt="">
        </div>
        <div class="services__style__two__content">
            <h3 class="title"><a href="services-details.html">Animation</a></h3>
            <p>Strategy is a forward-looking plan for your brand’s behavior.Strategy is a forward-looking plan.</p>
            <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="services__style__two__item">
        <div class="services__style__two__icon">
            <img src="assets/img/icons/services_light_icon06.png" alt="">
        </div>
        <div class="services__style__two__content">
            <h3 class="title"><a href="services-details.html">Marketing</a></h3>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
            <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="services__style__two__item">
        <div class="services__style__two__icon">
            <img src="assets/img/icons/services_light_icon05.png" alt="">
        </div>
        <div class="services__style__two__content">
            <h3 class="title"><a href="services-details.html">Brand strategy</a></h3>
            <p>Strategy is a forward-looking plan for your brand’s behavior.Strategy is a forward-looking plan.</p>
            <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="services__style__two__item">
        <div class="services__style__two__icon">
            <img src="assets/img/icons/services_light_icon04.png" alt="">
        </div>
        <div class="services__style__two__content">
            <h3 class="title"><a href="services-details.html">Graphic Design</a></h3>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
            <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="services__style__two__item">
        <div class="services__style__two__icon">
            <img src="assets/img/icons/services_light_icon07.png" alt="">
        </div>
        <div class="services__style__two__content">
            <h3 class="title"><a href="services-details.html">Visual Design</a></h3>
            <p>Strategy is a forward-looking plan for your brand’s behavior.Strategy is a forward-looking plan.</p>
            <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- services-area-end -->

<!-- testimonial-area -->
<section class="testimonial testimonial__style__two">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-9 col-lg-11">
<div class="testimonial__wrap">
    <div class="section__title text-center">
        <span class="sub-title">06 - Client Feedback</span>
        <h2 class="title">Some happy clients feedback</h2>
    </div>
    <div class="testimonial__two__active">
        <div class="testimonial__item">
            <div class="testimonial__icon">
                <i class="fas fa-quote-left"></i>
            </div>
            <div class="testimonial__content">
                <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
                <div class="testimonial__avatar">
                    <span>WPBakery/ uSA</span>
                    <div class="testi__avatar__img">
                        <img src="assets/img/images/testi_avatar01.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial__item">
            <div class="testimonial__icon">
                <i class="fas fa-quote-left"></i>
            </div>
            <div class="testimonial__content">
                <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
                <div class="testimonial__avatar">
                    <span>Adobe Photoshop</span>
                    <div class="testi__avatar__img">
                        <img src="assets/img/images/testi_avatar02.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial__arrow"></div>
</div>
</div>
</div>
</div>
<div class="testimonial__two__icons">
<ul>
<li><img src="assets/img/icons/testi_shape01.png" alt=""></li>
<li><img src="assets/img/icons/testi_shape02.png" alt=""></li>
<li><img src="assets/img/icons/testi_shape03.png" alt=""></li>
<li><img src="assets/img/icons/testi_shape04.png" alt=""></li>
<li><img src="assets/img/icons/testi_shape05.png" alt=""></li>
<li><img src="assets/img/icons/testi_shape06.png" alt=""></li>
</ul>
</div>
</section>
<!-- testimonial-area-end -->

<!-- blog-area -->
<section class="blog blog__style__two">
<div class="container">
<div class="row gx-0 justify-content-center">
<div class="col-lg-4 col-md-6 col-sm-9">
<div class="blog__post__item">
    <div class="blog__post__thumb">
        <a href="blog-details.html"><img src="assets/img/blog/blog_post_thumb01.jpg" alt=""></a>
        <div class="blog__post__tags">
            <a href="blog.html">Story</a>
        </div>
    </div>
    <div class="blog__post__content">
        <span class="date">13 january 2021</span>
        <h3 class="title"><a href="blog-details.html">Facebook design is dedicated to what's new in design</a></h3>
        <a href="blog-details.html" class="read__more">Read mORe</a>
    </div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-9">
<div class="blog__post__item">
    <div class="blog__post__thumb">
        <a href="blog-details.html"><img src="assets/img/blog/blog_post_thumb02.jpg" alt=""></a>
        <div class="blog__post__tags">
            <a href="blog.html">Social</a>
        </div>
    </div>
    <div class="blog__post__content">
        <span class="date">13 january 2021</span>
        <h3 class="title"><a href="blog-details.html">Make communication Fast and Effectively.</a></h3>
        <a href="blog-details.html" class="read__more">Read mORe</a>
    </div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-9">
<div class="blog__post__item">
    <div class="blog__post__thumb">
        <a href="blog-details.html"><img src="assets/img/blog/blog_post_thumb03.jpg" alt=""></a>
        <div class="blog__post__tags">
            <a href="blog.html">Work</a>
        </div>
    </div>
    <div class="blog__post__content">
        <span class="date">13 january 2021</span>
        <h3 class="title"><a href="blog-details.html">How to increase your productivity at work - 2021</a></h3>
        <a href="blog-details.html" class="read__more">Read mORe</a>
    </div>
</div>
</div>
</div>
<div class="blog__button text-center">
<a href="blog.html" class="btn">more blog</a>
</div>
</div>
</section>
<!-- blog-area-end -->

<!-- contact-area -->
<section class="homeContact">
<div class="container">
<div class="homeContact__wrap">
<div class="row">
<div class="col-lg-6">
    <div class="section__title">
        <span class="sub-title">07 - Say hello</span>
        <h2 class="title">Any questions? Feel free <br> to contact</h2>
    </div>
    <div class="homeContact__content">
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
        <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
    </div>
</div>
<div class="col-lg-6">
    <div class="homeContact__form">
        <form action="#">
            <input type="text" placeholder="Enter name*">
            <input type="email" placeholder="Enter mail*">
            <input type="number" placeholder="Enter number*">
            <textarea name="message" placeholder="Enter Massage*"></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>


@endsection