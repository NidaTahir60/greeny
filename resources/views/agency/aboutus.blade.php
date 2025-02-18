@extends('agency.layouts.master')

@section('content')
    <section class="inner-section single-banner"
        style="background: url(agency/assets/images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>about our company</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">about</li>
            </ol>
        </div>
    </section>
    <section class="inner-section about-company">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2>Our Motive is to Provide Best for Those Who Deserve</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis exercitationem commodi
                            aliquam necessitatibus vero reiciendis quaerat illo est fuga ea temporibus natus doloremque
                            ipsum voluptas quod deserunt expedita reprehenderit pariatur quidem quisquam, recusandae
                            animi non! Voluptas totam repudiandae rerum molestiae possimus quis numquam sapiente sunt
                            architecto quisquam Aliquam odio optio</p>
                    </div>
                    <ul class="about-list">
                        <li>
                            <h3>34785</h3>
                            <h6>registered users</h6>
                        </li>
                        <li>
                            <h3>2623</h3>
                            <h6>per day visitors</h6>
                        </li>
                        <li>
                            <h3>189</h3>
                            <h6>total products</h6>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('agency/assets/images/about/01.jpg') }}" alt="about">
                        <img src="{{ asset('agency/assets/images/about/02.jpg') }}" alt="about">
                        <img src="{{ asset('agency/assets/images/about/03.jpg') }}" alt="about">
                        <img src="{{ asset('agency/assets/images/about/04.jpg') }}" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="inner-section about-testimonial">
        <div class="container">
            <ul class="testi-slider slider-arrow">
                <li>
                    <div class="testi-content">
                        <a class="testi-img" href="#">
                            <img src="{{ asset('agency/assets/images/testimonial/01.jpg') }}" alt="testimonial">
                        </a>
                        <div class="testi-quote">
                            <i class="icofont-quote-left"></i>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit neque earum sapiente vitae
                                obcaecati magnam doloribus magni provident ab ipsam sint dolores repellat inventore
                                sequi temporibus natus.</p>
                            <h4>tahmina labonno</h4>
                            <h6>Former MD - joomtech.com</h6>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testi-content">
                        <a class="testi-img" href="#">
                            <img src="{{ asset('agency/assets/images/testimonial/02.jpg') }}" alt="testimonial">
                        </a>
                        <div class="testi-quote">
                            <i class="icofont-quote-left"></i>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit neque earum sapiente vitae
                                obcaecati magnam doloribus magni provident ab ipsam sint dolores repellat inventore
                                sequi temporibus natus.</p>
                            <h4>miron mahmud</h4>
                            <h6>Senior Accountant - farmfresh.com</h6>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="about-choose">
        <div class="container">
            <div class="row">
                <div class="col-11 col-md-9 col-lg-7 col-xl-6 mx-auto">
                    <div class="section-heading">
                        <h2>Why People Choose Their Daily Organic Life With Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="choose-card">
                        <div class="choose-icon"><i class="icofont-fruits"></i></div>
                        <div class="choose-text">
                            <h4>100% fresh organic food</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing tempora pariatur provident animi error
                                dignissimo cumque minus facere dolores cupiditate debitis</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-card">
                        <div class="choose-icon"><i class="icofont-vehicle-delivery-van"></i></div>
                        <div class="choose-text">
                            <h4>Delivery within one hour</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing tempora pariatur provident animi error
                                dignissimo cumque minus facere dolores cupiditate debitis</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-card">
                        <div class="choose-icon"><i class="icofont-loop"></i></div>
                        <div class="choose-text">
                            <h4>quickly return policy</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing tempora pariatur provident animi error
                                dignissimo cumque minus facere dolores cupiditate debitis</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-card">
                        <div class="choose-icon"><i class="icofont-support"></i></div>
                        <div class="choose-text">
                            <h4>instant support team</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing tempora pariatur provident animi error
                                dignissimo cumque minus facere dolores cupiditate debitis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="inner-section about-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>our team members</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="team-slider slider-arrow">
                        <li>
                            <figure class="team-media"><img src="{{ asset('agency/assets/images/team/01.jpg') }}"
                                    alt="team">
                                <div class="team-overlay">
                                    <a href="#" class="icofont-facebook facebook"></a>
                                    <a href="#" class="icofont-twitter twitter"></a>
                                    <a href="#" class="icofont-linkedin linkedin"></a>
                                </div>
                            </figure>
                            <div class="team-meta">
                                <h5><a href="#">Jhonson Hononr</a></h5>
                                <p>Founder & CEO</p>
                            </div>
                        </li>
                        <li>
                            <figure class="team-media"><img src="{{ asset('agency/assets/images/team/02.jpg') }}"
                                    alt="team">
                                <div class="team-overlay">
                                    <a href="#" class="icofont-facebook facebook"></a>
                                    <a href="#" class="icofont-twitter twitter"></a>
                                    <a href="#" class="icofont-linkedin linkedin"></a>
                                </div>
                            </figure>
                            <div class="team-meta">
                                <h5><a href="#">Jhonson Hononr</a></h5>
                                <p>Web developer</p>
                            </div>
                        </li>
                        <li>
                            <figure class="team-media"><img src="{{ asset('agency/assets/images/team/03.jpg') }}"
                                    alt="team">
                                <div class="team-overlay">
                                    <a href="#" class="icofont-facebook facebook"></a>
                                    <a href="#" class="icofont-twitter twitter"></a>
                                    <a href="#" class="icofont-linkedin linkedin"></a>
                                </div>
                            </figure>
                            <div class="team-meta">
                                <h5><a href="#">Jhonson Hononr</a></h5>
                                <p>graphics designer</p>
                            </div>
                        </li>
                        <li>
                            <figure class="team-media"><img src="{{ asset('agency/assets/images/team/04.jpg') }}"
                                    alt="team">
                                <div class="team-overlay">
                                    <a href="#" class="icofont-facebook facebook"></a>
                                    <a href="#" class="icofont-twitter twitter"></a>
                                    <a href="#" class="icofont-linkedin linkedin"></a>
                                </div>
                            </figure>
                            <div class="team-meta">
                                <h5><a href="#">Jhonson Hononr</a></h5>
                                <p>digital marketer</p>
                            </div>
                        </li>
                        <li>
                            <figure class="team-media">
                                <img src="{{ asset('agency/assets/images/team/05.jpg') }}" alt="team">
                                <div class="team-overlay">
                                    <a href="#" class="icofont-facebook facebook"></a>
                                    <a href="#" class="icofont-twitter twitter"></a>
                                    <a href="#" class="icofont-linkedin linkedin"></a>
                                </div>
                            </figure>
                            <div class="team-meta">
                                <h5><a href="#">Jhonson Hononr</a></h5>
                                <p>article writer</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="news-part" style="background: url(agency/assets/images/newsletter.jpg) no-repeat center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-6 col-xl-7">
                    <div class="news-text">
                        <h2>Get 20% Discount for Subscriber</h2>
                        <p>Lorem ipsum dolor consectetur adipisicing accusantium</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 col-xl-5">
                    <form class="news-form"><input type="text" placeholder="Enter Your Email Address"><button><span><i
                                    class="icofont-ui-email"></i>Subscribe</span></button></form>
                </div>
            </div>
        </div>
    </section>
    <section class="intro-part">
        <div class="container">
            <div class="row intro-content">
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-truck"></i></div>
                        <div class="intro-content">
                            <h5>free home delivery</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-sync-alt"></i></div>
                        <div class="intro-content">
                            <h5>instant return policy</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-headset"></i></div>
                        <div class="intro-content">
                            <h5>quick support system</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-lock"></i></div>
                        <div class="intro-content">
                            <h5>secure payment way</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
