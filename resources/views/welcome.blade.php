@extends('layouts.main')

@section('content')

    <style>
        @media only screen and (max-width: 1026px) {
            #fadeshow1 {
                display: none;
            }
        }
        @media only screen and (min-width: 1026px) {
            #fadeshow2 {
                display: none;
            }
        }
    </style>

    <div class="hp-banner-wrapper" id="fadeshow1">
        <div class="slider-item-wrapper">
            <div class="slider-item slider"
                 style='background-image:url("{{URL::to("fwwebimages/zaphome.jpg")}}");hieght:60px;'>
                <div class="banner-text-wrap" >
                    <h2>ZARK ZAP - Menthol</h2>
                    <p>Zap Into Coolness.</p>
                </div>
            </div>









            <div class="slider-item slider"
                 style='background-image:url("{{URL::to("fwwebimages/zapdark.jpg")}}");hieght:60px;'>
                <div class="banner-text-wrap">
                    <h2>ZARK DARK - Toasted</h2>
                    <p>For The Daring.</p>

                    <div class="btn-wrap">
                        <a href="#ourcigerattes"
                           class="button"><span>Explore More</span></a>
                    </div>
                </div>
            </div>
            <div class="slider-item slider"
                 style='background-image:url("{{URL::to("fwwebimages/zapnargizgrey.jpg")}}")'>
                <div class="banner-text-wrap">
                    <h2>NARGIZ GREY</h2>
                    <p>American Blend</p>
                    <div class="btn-wrap">
                        <a href="#ourcigerattes"
                           class="button"><span>Explore More</span></a>
                    </div>
                </div>
            </div>


            <div class="slider-item slider "
                 style='background-image:url("{{URL::to("fwwebimages/zapnargizwhite.jpg")}}")'>
                <div class="banner-text-wrap">
                    <h2>NARGIZ WHITE</h2>
                    <p>American Blend</p>
                    <div class="btn-wrap">
                        <a href="#ourcigerattes"
                           class="button"><span>Explore More</span></a>
                    </div>
                </div>
            </div>

            <div class="slider-item slider"
                 style='background-image:url("{{URL::to("fwwebimages/zapnargizgold.jpg")}}")'>
                <div class="banner-text-wrap">
                    <h2>NARGIZ GOLD</h2>
                    <p>American Blend</p>
                    <div class="btn-wrap">
                        <a href="#ourcigerattes"
                           class="button"><span>Explore More</span></a>
                    </div>
                </div>
            </div>

            <div class="slider-item slider"
                 style='background-image:url("{{URL::to("fwwebimages/zarkmoj copy.jpg")}}")'>
                <div class="banner-text-wrap">
                    <h2>Extra Max Mojito</h2>
                    <p>American Blend</p>
                    <div class="btn-wrap">
                        <a href="#ourcigerattes"
                           class="button"><span>Explore More</span></a>
                    </div>
                </div>
            </div>

            <div class="slider-item slider"
                 style='background-image:url("{{URL::to("fwwebimages/time_c.jpg")}}")'>
                <div class="banner-text-wrap">
                    <h2>Time Change</h2>
                    <p>Apple Mint, Supper Slim</p>
                    <div class="btn-wrap">
                        <a href="#ourcigerattes"
                           class="button"><span>Explore More</span></a>
                    </div>
                </div>
            </div>

            <div class="slider-item slider"
                 style='background-image:url("{{URL::to("fwwebimages/time_c_p.jpg")}}")'>
                <div class="banner-text-wrap">
                    <h2>Time Change Plus</h2>
                    <p>Mojito Capsule, Supper Slim</p>
                    <div class="btn-wrap">
                        <a href="#ourcigerattes"
                           class="button"><span>Explore More</span></a>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="hp-banner-wrapper" id="fadeshow2">
        <div class="slider-item-wrapper">
            <div class="slider-item slider"
                 style='background-image:url("{{URL::to("fwwebimages/515 540 XELS 4.jpg")}}");hieght:60px;'>
                <div class="banner-text-wrap" >
                    <h2>ZARK ZAP - Menthol</h2>
                    <p>Zap Into Coolness.</p>
                </div>
            </div>


            <div class="slider-item slider"
                 style='background-image:url("{{URL::to("fwwebimages/515 540 XELS 3.jpg")}}");hieght:60px;'>
                <div class="banner-text-wrap">
                    <h2>ZARK DARK - Toasted</h2>
                    <p>For The Daring.</p>

                    <div class="btn-wrap">
                        <a href="#ourcigerattes"
                           class="button"><span>Explore More</span></a>
                    </div>
                </div>
            </div>
            <div class="slider-item slider"
                 style='background-image:url("{{URL::to("fwwebimages/zarc webs mages10b.jpg")}}")'>
                <div class="banner-text-wrap">
                    <h2>NARGIZ GREY</h2>
                    <p>American Blend</p>
                    <div class="btn-wrap">
                        <a href="#ourcigerattes"
                           class="button"><span>Explore More</span></a>
                    </div>
                </div>
            </div>


            <div class="slider-item slider "
                 style='background-image:url("{{URL::to("fwwebimages/zarc webs mages10c.jpg")}}")'>
                <div class="banner-text-wrap">
                    <h2>NARGIZ WHITE</h2>
                    <p>American Blend</p>
                    <div class="btn-wrap">
                        <a href="#ourcigerattes"
                           class="button"><span>Explore More</span></a>
                    </div>
                </div>
            </div>

            <div class="slider-item slider"
                 style='background-image:url("{{URL::to("fwwebimages/zarc webs mages10a.jpg")}}")'>
                <div class="banner-text-wrap">
                    <h2>NARGIZ GOLD</h2>
                    <p>American Blend</p>
                    <div class="btn-wrap">
                        <a href="#ourcigerattes"
                           class="button"><span>Explore More</span></a>
                    </div>
                </div>
            </div>

            <div class="slider-item slider"
                 style='background-image:url("{{URL::to("fwwebimages/zarc webs mages1440 x 900 4.jpg")}}")'>
                <div class="banner-text-wrap">
                    <h2>Extra Max Mojito</h2>
                    <p>American Blend</p>
                    <div class="btn-wrap">
                        <a href="#ourcigerattes"
                           class="button"><span>Explore More</span></a>
                    </div>
                </div>
            </div>

            <div class="slider-item slider"
                 style='background-image:url("{{URL::to("fwwebimages/tc.jpg")}}")'>
                <div class="banner-text-wrap">
                    <h2>Time Change</h2>
                    <p>Apple Mint, Supper Slim</p>
                    <div class="btn-wrap">
                        <a href="#ourcigerattes"
                           class="button"><span>Explore More</span></a>
                    </div>
                </div>
            </div>

            <div class="slider-item slider"
                 style='background-image:url("{{URL::to("fwwebimages/tcp.jpg")}}")'>
                <div class="banner-text-wrap">
                    <h2>Time Change Plus</h2>
                    <p>Mojito Capsule, Supper Slim</p>
                    <div class="btn-wrap">
                        <a href="#ourcigerattes"
                           class="button"><span>Explore More</span></a>
                    </div>
                </div>
            </div>



        </div>
    </div>



    </header>



    <section id="about" class="hp-section section-about">
        </br>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-wrap">
                        <div class="section-title">
                            <h2 style="text-align:center;font-weight: bolder;"><a href="">ZARK Cigerattes</a></h2>
                            <p style="text-align:center;font-weight: bolder;" ><u style="color: #cf9d20">“A World of Flavour”</u></p></div>

                        <div class="section-title">
                            <p style="text-align:left;font-weight: bolder;">Our Vision Statement</p>
                        </div>
                        <p style="text-align:justify;">To produce, process and pack 100% Natural Zimbabwean grown tobacco and sell in and outside Zimbabwe at affordable prices. To ensure that
                            clientele get to experience modern cigarettes production innovations.</p>

                        <div class="section-title">
                            <p style="text-align:left;font-weight: bolder;">Our Promise To Clients</p>
                        </div>
                        <p style="text-align:justify;">To Provide the best Quality Natural Zimbabwean Grown Tobacco at the Consumer's Door Step,
                        at affordable prices.</p>



                        <div class="section-title">
                            <p style="text-align:left; font-weight: bolder;">Our Key Values</p>
                        </div>
                        <p style="text-align:justify;">
                            <ol>

                            <li> PROFESSIONALISM</li>
                            <li> INTERGRITY</li>
                            <li> ECONOMIC GROWTH</li>
                            <li> CONSISTENCY</li>
                            <li> WORLDWIDE PRODUCT PROVISION</li>
                        </ol>
                        </p>




                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img">
                        <div class="hp-about-slider">
                            <div class="about-slider-item" style=" padding-top: 90px;">
                                <img  src="{{URL::to("fwwebimages/ZARK BURST TRUCK BRANDING1.jpg")}}" />


                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>



    <section id="ourcigerattes" class="hp-section section-accomodation">
        <div class="container">
            <div class="row">
                <div class="section-title"><h2>Our Products &amp; Franchise Products</h2>
                    <p>No less than 9 different products &amp; of varied flavors</p></div>
            </div>
            <div class="hp-accomodation-wrap">
                <div class="accomodation-item-wrap slide1"
                     style='background-image:url("{{URL::to('fwwebimages/515 540 XELS 4.jpg')}}");border-style: solid;background-size: 400px 400px;'>
              <a href="{{route('products','zarkzap')}}"
                       data-id="163" class="button btn-default">
                        <span>View Product</span></a>
                    <div class="accomodation-footer">
                        <h2><a href=""> ZARK ZAP</a>
                        </h2>

                        <span class="price_value price_min">&nbsp; </span>

                        <span class="unit">Zap into Coolness</span>
                    </div>
                </div>
                <div class="accomodation-item-wrap slide1"
                     style='background-image:url("{{URL::to('fwwebimages/darksmall.jpg')}}");border-style: solid;background-size: 400px 400px;'>
                   <a href="{{route('products','zarkdark')}}"
                       data-id="165" class="button btn-default">
                        <span>View Product</span></a>
                    <div class="accomodation-footer">
                        <h2><a href="">ZARK DARK</a>
                        </h2>

                        <span class="price_value price_min">&nbsp;For the Daring</span>

                        <span class="unit"></span>
                    </div>
                </div>

                <div class="accomodation-item-wrap slide1"
                     style='background-image:url("{{URL::to('fwwebimages/zarc webs mages10a.jpg')}}");border-style: solid;background-size: 400px 400px;'>
                  <a href="{{route('products','nargizgrey')}}"
                       data-id="161" class="button btn-default">
                        <span>View Product</span></a>
                    <div class="accomodation-footer">
                        <h2><a href="">NARGIZ GREY</a>
                        </h2>

                        <span class="price_value price_min">&nbsp; American Blend</span>

                        <span class="unit"></span>
                    </div>
                </div>
                <div class="accomodation-item-wrap slide1"
                     style='background-image:url("{{URL::to('fwwebimages/zarc webs mages10c.jpg')}}");border-style: solid;background-size: 400px 400px;'>
                  <a href="{{route('products','nargizwhite')}}"
                       data-id="114" class="button btn-default">
                        <span>View Product</span></a>
                    <div class="accomodation-footer">
                        <h2><a href="">NARGIZ WHITE</a>
                        </h2>

                        <span class="price_value price_min">&nbsp; American Blend</span>

                        <span class="unit"></span>
                    </div>
                </div>
                <div class="accomodation-item-wrap slide1"
                     style='background-image:url("{{URL::to('fwwebimages/zarc webs mages10a.jpg')}}");border-style: solid;background-size: 400px 400px;'>
                    <a href="{{route('products','nargizgold')}}"
                       data-id="107" class="button btn-default">
                        <span>View Product </span></a>
                    <div class="accomodation-footer">
                        <h2><a href="">NARGIZ GOLD</a>
                        </h2>

                        <span class="price_value price_min"> American Blend</span>

                        <span class="unit"></span>
                    </div>
                </div>


                <div class="accomodation-item-wrap slide1"
                     style='background-image:url("{{URL::to('fwwebimages/zarc webs mages1440 x 900 4.jpg')}}");border-style: solid;background-size: 600px 400px;'>
                   <a href="{{route('products','mojitoextramax')}}"
                       data-id="112" class="button btn-default">
                        <span>View Product</span></a>
                    <div class="accomodation-footer">
                        <h2><a href="">Extra Max Mojito</a>
                        </h2>

                        <span class="price_value price_min">&nbsp;American Blend</span>

                        <span class="unit"></span>
                    </div>
                </div>

                <div class="accomodation-item-wrap slide1"
                     style='background-image:url("{{URL::to('fwwebimages/tc.jpg')}}");border-style: solid;background-size: 400px 400px;'>
                    <a href="{{route('products','timechange')}}"
                       data-id="112" class="button btn-default">
                        <span>View Product</span></a>
                    <div class="accomodation-footer">
                        <h2><a href="">Time Change</a>
                        </h2>

                        <span class="price_value price_min">Applemint Flavor Super Slim</span>

                        <span class="unit"></span>
                    </div>
                </div>

                <div class="accomodation-item-wrap slide1"
                     style='background-image:url("{{URL::to('fwwebimages/tcp.jpg')}}");border-style: solid;background-size: 400px 400px;'>
                    <a href="{{route('products','timechangeplus')}}"
                       data-id="112" class="button btn-default">
                        <span>View Product</span></a>
                    <div class="accomodation-footer">
                        <h2><a href="">Time Change Plus</a>
                        </h2>

                        <span class="price_value price_min">Mojito Capsule Super Slim</span>

                        <span class="unit"></span>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section id="services" class="hp-section features-sec">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Non-Tobacco Materials</h2>
                    <p>We provide the following:</p></div>
                <div class="features-slider">
                    <div class="features-item-wrap">
                        <a href=""
                           class="tilter tilter--7 slider1"
                           style='background-image:url("{{URL::to("fwwebimages/ntms/foil.png")}}")'>
                            <div class="tilter__figure">
                                <div class="tilter__deco tilter__deco--shine">
                                    <div></div>
                                </div>
                                <div class="tilter__caption">
                                    <h3 class="tilter__title">Aluminium foil </h3>
                                    <p class="tilter__description">
                                        Contact us on:

                                        ken@cavendishlloyd.com /

                                        moiz@cavendishlloyd.com /

                                        lee@cavendishlloyd.com.
                                    </p>
                                </div>
                                <svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
                                    <path d="M20.5,20.5h260v375h-260V20.5z"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="features-item-wrap">
                        <a href=""
                           class="tilter tilter--7 slider1"
                           style='background-image:url("{{URL::to("fwwebimages/ntms/filter1.png")}}")'>
                            <div class="tilter__figure">
                                <div class="tilter__deco tilter__deco--shine">
                                    <div></div>
                                </div>
                                <div class="tilter__caption">
                                    <h3 class="tilter__title">Filters </h3>
                                    <p class="tilter__description">Contact us on:

                                        ken@cavendishlloyd.com /

                                        moiz@cavendishlloyd.com /

                                        lee@cavendishlloyd.com
                                    </p>
                                </div>
                                <svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
                                    <path d="M20.5,20.5h260v375h-260V20.5z"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="features-item-wrap">
                        <a href=""
                           class="tilter tilter--7 slider1"
                           style='background-image:url("{{URL::to("fwwebimages/ntms/innerframesblack.jpg")}}")'>
                            <div class="tilter__figure">
                                <div class="tilter__deco tilter__deco--shine">
                                    <div></div>
                                </div>
                                <div class="tilter__caption">
                                    <h3 class="tilter__title">Inner frame</h3>
                                    <p class="tilter__description"> Contact us on:

                                        ken@cavendishlloyd.com /

                                        moiz@cavendishlloyd.com /

                                        lee@cavendishlloyd.com</p>
                                </div>
                                <svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
                                    <path d="M20.5,20.5h260v375h-260V20.5z"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="features-item-wrap">
                        <a href=""
                           class="tilter tilter--7 slider1"
                           style='background-image:url("{{URL::to("fwwebimages/ntms/cigbox.png")}}")'>
                            <div class="tilter__figure">
                                <div class="tilter__deco tilter__deco--shine">
                                    <div></div>
                                </div>
                                <div class="tilter__caption">
                                    <h3 class="tilter__title">Cigarette box</h3>
                                    <p class="tilter__description">Contact us on:

                                        ken@cavendishlloyd.com /

                                        moiz@cavendishlloyd.com /

                                        lee@cavendishlloyd.com</p>
                                </div>
                                <svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
                                    <path d="M20.5,20.5h260v375h-260V20.5z"/>
                                </svg>
                            </div>
                        </a>
                    </div>

                    <div class="features-item-wrap">
                        <a href=""
                           class="tilter tilter--7 slider1"
                           style='background-image:url("{{URL::to("fwwebimages/ntms/PlugWrap.jpg")}}")'>
                            <div class="tilter__figure">
                                <div class="tilter__deco tilter__deco--shine">
                                    <div></div>
                                </div>
                                <div class="tilter__caption">
                                    <h3 class="tilter__title">Plug wrap paper</h3>
                                    <p class="tilter__description">Contact us on:

                                        ken@cavendishlloyd.com /

                                        moiz@cavendishlloyd.com /

                                        lee@cavendishlloyd.com</p>
                                </div>
                                <svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
                                    <path d="M20.5,20.5h260v375h-260V20.5z"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- Start of contact section -->
    <section id="contact" class="section contact" style='background-image:url("wp-content/img/zarklogo.png1")'>
        <div class="container">
            <div class="row">
                <div class="contact-wrapper">
                    <div class="contact-form-wrap">
                        <div class="section-title txt-center">
                            <h2>Contact Us</h2>
                            <p>You need more information? Give us a ring or Find us at the office</p>
                        </div>
                        <form action="{{route('message_us')}}" method="POST">
                            @csrf

                            <div class="col-md-6 col-sm-12">
                                <span class="input input--nao">
                                    <input id="name" name="name" class="input__field input__field--nao" type="text"
                                           required/>
                                    <label class="input__label input__label--nao">
                                        <span class="input__label-content input__label-content--nao">Name</span>
                                    </label>
                                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60"
                                         preserveAspectRatio="none">
                                        <path
                                            d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-md-6 col-sm-12">
                            <span class="input input--nao">
                                <input id="phone" name="phone" class="input__field input__field--nao" type="text"
                                       required/>
                                <label class="input__label input__label--nao">
                                    <span class="input__label-content input__label-content--nao">Phone</span>
                                </label>
                                <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60"
                                     preserveAspectRatio="none">
                                    <path
                                        d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                                </svg>
                            </span>
                            </div>
                            <div class="col-md-6 col-sm-12" style="padding-top: 30px;">

                                <span class="input input--nao">
                                    <input id="user_email" name="email" class="input__field input__field--nao"
                                           type="email"/>
                                    <label class="input__label input__label--nao">

                                        <span class="input__label-content input__label-content--nao">Email</span>
                                    </label>
                                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60"
                                         preserveAspectRatio="none">
                                        <path
                                            d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                                    </svg>
                                </span>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <span class="input input--nao message">
                                    <textarea class="input__field input__field--nao" rows="4" id="comments"
                                              name="message"></textarea>
                                    <label class="input__label input__label--nao">
                                        <span class="input__label-content input__label-content--nao">Message</span>
                                    </label>
                                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60"
                                         preserveAspectRatio="none">
                                        <path
                                            d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                                    </svg>
                                </span>
                            </div>
                            <Button type="submit" class="button btn btn-default">Submit</Button>

                        </form>
                    </div>
                    <div style="padding-top: 150px;">
                    <div class="contact-info">
                        <h3>ZARK Cigarettes</h3>
                        <p>Bay 27, Harrow Bussiness Park</p>
                        <p>Msasa, Harare Zimbabwe</p><br>
                        <p><strong>Email: </strong> info@zarkcigerrates.com</p>
                        <p><strong>Telephone No.: </strong>+263 242 4466 40/96</p>
                        <p><strong>Cell / Whatsapp No.: </strong>+263 731 400 000</p>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="ourLeader" class="section contact" style='background-image:url("wp-content/img/zarklogo.png1")'>
        <div class="container">
            <div class="row">
                <div class="contact-wrapper">
                    <div class="contact-form-wrap">
                        <div class="section-title txt-center">
                            <h2>Our Leader</h2>



<h3>Kenneth Mvududu</h3>
                            <h4><u>Managing Director Cigarettes and NTM</u></h4>

<p style="text-align: left;">Ken is responsible for development, production, marketing and distribution of all the ZARK Cigaretttes which is under Cavendish
    Lloyd international cigarettes. The Non-tobacco division also falls under his
    responsibilities. With over 17 years’ experience, he is a marketer by profession who
    has worked in various sectors such as banking, telecommunication, freight and advertising.
    His responsibility is to develop effective strategy and to grow our cigarette brands in
    Africa and beyond.</p>

                            </div>
                    </div>
                    <div style="">
                        <div class="contact-info">
                        <img src="wp-content/img/ken.jpeg"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of contact section -->

    <!-- Footer -->
    <footer class="theme-footer">
<!--        <div class="widget-area footer-widgets footer-widget-area-top">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-12">
                        <aside id="text-2" class="widget widget_text"><h4 class="widget-title">Service</h4>
                            <div class="textwidget" style="text-align:justify;"><p>
                                    Visit us and enjoy the comfort, peace and tranquility and the flora and fauna served
                                    by a very helpful and friendly staff.
                                    What you see is what you get and more. Our prices are deceivingly more than
                                    reasonable.
                                    <br/>
                                    T : <a href="">+263 542 225 219</a><br/>
                                    E : <a href="">mufarowenyasha@gmail.com</a></p>
                            </div>
                        </aside>
                    </div>


                    <div class="col-md-6 col-sm-12">
                        <aside id="media_gallery-2" class="widget widget_media_gallery"><h4 class="widget-title">
                                Gallery</h4>
                            <div id='gallery-1' class='gallery galleryid-117 gallery-columns-3 gallery-size-thumbnail'>
                                <figure class='gallery-item'>
                                    <div class='gallery-icon landscape'>
                                        <a href='wp-content/uploads/2020/gallery/DCS 11081.jpg'><img width="300"
                                                                                                     height="300"
                                                                                                     src="wp-content/uploads/2020/gallery/DCS 11081.jpg"
                                                                                                     class="attachment-thumbnail size-thumbnail"
                                                                                                     alt=""
                                                                                                     srcset="wp-content/uploads/2020/gallery/DCS 11081.jpg 300w, wp-content/uploads/2020/gallery/DCS 11081.jpg 300w, wp-content/uploads/2020/gallery/DCS 11081.jpg 100w"
                                                                                                     sizes="(max-width: 300px) 100vw, 300px"/></a>
                                    </div>
                                </figure>
                                <figure class='gallery-item'>
                                    <div class='gallery-icon landscape'>
                                        <a href='wp-content/uploads/2020/gallery/DCS 11089.jpg'><img width="300"
                                                                                                     height="300"
                                                                                                     src="wp-content/uploads/2020/gallery/DCS 11089.jpg"
                                                                                                     class="attachment-thumbnail size-thumbnail"
                                                                                                     alt=""
                                                                                                     srcset="wp-content/uploads/2020/gallery/DCS 11089.jpg 300w, wp-content/uploads/2020/gallery/DCS 11089.jpg 300w, wp-content/uploads/2020/gallery/DCS 11089.jpg 100w"
                                                                                                     sizes="(max-width: 300px) 100vw, 300px"/></a>
                                    </div>
                                </figure>
                                <figure class='gallery-item'>
                                    <div class='gallery-icon landscape'>
                                        <a href='wp-content/uploads/2020/gallery/DCS 11084.jpg'><img width="300"
                                                                                                     height="300"
                                                                                                     src="wp-content/uploads/2020/gallery/DCS 11084.jpg"
                                                                                                     class="attachment-thumbnail size-thumbnail"
                                                                                                     alt=""
                                                                                                     srcset="wp-content/uploads/2020/gallery/DCS 11084.jpg 300w, wp-content/uploads/2020/gallery/DCS 11084.jpg 300w, wp-content/uploads/2020/gallery/DCS 11084.jpg 100w"
                                                                                                     sizes="(max-width: 300px) 100vw, 300px"/></a>
                                    </div>
                                </figure>
                                <figure class='gallery-item'>
                                    <div class='gallery-icon landscape'>
                                        <a href='wp-content/uploads/2020/gallery/DCS 11085.jpg'><img width="300"
                                                                                                     height="300"
                                                                                                     src="wp-content/uploads/2020/gallery/DCS 11085.jpg"
                                                                                                     class="attachment-thumbnail size-thumbnail"
                                                                                                     alt=""
                                                                                                     srcset="wp-content/uploads/2020/gallery/DCS 11085.jpg 300w, wp-content/uploads/2020/gallery/DCS 11085.jpg 300w, wp-content/uploads/2020/gallery/DCS 11085.jpg 100w"
                                                                                                     sizes="(max-width: 300px) 100vw, 300px"/></a>
                                    </div>
                                </figure>
                                <figure class='gallery-item'>
                                    <div class='gallery-icon landscape'>
                                        <a href='wp-content/uploads/2020/gallery/DCS 11090.jpg'><img width="300"
                                                                                                     height="300"
                                                                                                     src="wp-content/uploads/2020/gallery/DCS 11090.jpg"
                                                                                                     class="attachment-thumbnail size-thumbnail"
                                                                                                     alt=""
                                                                                                     srcset="wp-content/uploads/2020/gallery/DCS 11090.jpg 300w, wp-content/uploads/2020/gallery/DCS 11090.jpg 300w, wp-content/uploads/2020/gallery/DCS 11090.jpg 100w"
                                                                                                     sizes="(max-width: 300px) 100vw, 300px"/></a>
                                    </div>
                                </figure>
                                <figure class='gallery-item'>
                                    <div class='gallery-icon landscape'>
                                        <a href='wp-content/uploads/2020/gallery/DCS 11077.jpg'><img width="300"
                                                                                                     height="300"
                                                                                                     src="wp-content/uploads/2020/gallery/DCS 11077.jpg"
                                                                                                     class="attachment-thumbnail size-thumbnail"
                                                                                                     alt=""
                                                                                                     srcset="wp-content/uploads/2020/gallery/DCS 11077.jpg 300w, wp-content/uploads/2020/gallery/DCS 11077.jpg 300w, wp-content/uploads/2020/gallery/DCS 11077.jpg 100w"
                                                                                                     sizes="(max-width: 300px) 100vw, 300px"/></a>
                                    </div>
                                </figure>
                            </div>
                        </aside>
                    </div>
                </div>
                &lt;!&ndash; End Row &ndash;&gt;
            </div>
            &lt;!&ndash; End Container &ndash;&gt;
        </div>-->
        <!-- Footer Widgets -->
@endsection
