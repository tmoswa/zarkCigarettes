@extends('layouts.main_header')

@section('content')

    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>

    </head>



    <div class="inner-banner-wrap" style="background-image:url('{{ ($current_product!=null) ? URL::to($current_product->picture10) :  URL::to("fwwebimages/.jpg")   }}')">
        <div class="container">
            <div class="row">
                <div class="inner-banner-content">
                    <h2>{{($current_product!=null)?$current_product->name:'Product Name'}}</h2>
                    <div class="header-breadcrumb">
                        <ul class="breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/products')}}">Products</a></li>
                            <li>name</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </header>




    <div class="section-content section sidebar-page" style="z-index: 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 pull-left">
                    <div id="room-112"
                         class="hb_single_room post-112 hb_room type-hb_room status-publish has-post-thumbnail hentry hb_room_type-deluxed">


                        <div class="summary entry-summary">




                            <div class="hb_room_gallery camera_wrap camera_emboss" id="camera_wrap_112">
@if($current_product!=null)
                                @if($current_product->picture1!=null)
                                    <div data-thumb="{{URL::to($current_product->picture1)}}"
                                         data-src="{{URL::to($current_product->picture1)}}"></div>
                                @endif

                                @if($current_product->picture2!=null)
                                    <div data-thumb="{{URL::to($current_product->picture2)}}"
                                         data-src="{{URL::to($current_product->picture2)}}"></div>
                                @endif

                                @if($current_product->picture3!=null)
                                    <div data-thumb="{{URL::to($current_product->picture3)}}"
                                         data-src="{{URL::to($current_product->picture3)}}"></div>
                                @endif

                                @if($current_product->picture4!=null)
                                    <div data-thumb="{{URL::to($current_product->picture4)}}"
                                         data-src="{{URL::to($current_product->picture4)}}"></div>
                                @endif

                                @if($current_product->picture5!=null)
                                    <div data-thumb="{{URL::to($current_product->picture5)}}"
                                         data-src="{{URL::to($current_product->picture5)}}"></div>
                                @endif

                                @if($current_product->picture6!=null)
                                    <div data-thumb="{{URL::to($current_product->picture6)}}"
                                         data-src="{{URL::to($current_product->picture6)}}"></div>
                                @endif

                                @if($current_product->picture7!=null)
                                    <div data-thumb="{{URL::to($current_product->picture7)}}1"
                                         data-src="{{URL::to($current_product->picture7)}}1"></div>
                                @endif

                                @if($current_product->picture8!=null)
                                    <div data-thumb="{{URL::to($current_product->picture8)}}1"
                                         data-src="{{URL::to($current_product->picture8)}}1"></div>
                                @endif

                                @if($current_product->picture9!=null)
                                    <div data-thumb="{{URL::to($current_product->picture9)}}1"
                                         data-src="{{URL::to($current_product->picture9)}}1"></div>
                                @endif
                                @if($current_product->picture10!=null)
                                    <div data-thumb="{{URL::to($current_product->picture10)}}1"
                                         data-src="{{URL::to($current_product->picture10)}}1"></div>
                                @endif
    @endif
                            </div>


                        </div><!-- .summary -->

                    </div>

                </div>


                <div class="col-md-4 sidebar pull-right">

                    <div id="secondary">

                        <div class="summary entry-summary">
                        <script type="text/javascript">
                            (function ($) {
                                "use strict";
                                $(document).ready(function () {
                                    $('#camera_wrap_112').camera({
                                        height: '470px',
                                        loader: 'none',
                                        pagination: false,
                                        thumbnails: true
                                    });
                                });
                            })(jQuery);
                        </script>

                        <div class="hb_single_room_details" style="padding-top: 30px;">


                            <ul class="hb_single_room_tabs">
                                    <a href="#hb_room_description"> <div class="hb_single_room_tabs">
                                            @if($current_product->p_type=='product' || $current_product->p_type=='ntms')
                                                <span >Description</span>
                                            @else
                                                <span>Get Intouch</span>
                                            @endif
                                        </div></a>
                                </ul>



                            <div class="hb_single_room_tabs_content">
                                <div id="hb_room_description" class="hb_single_room_tab_details">
                                    @if($current_product!=null)

                                        @if($current_product->p_type=='product' || $current_product->p_type=='ntms')
                                            <p style="text-align: justify;">{{$current_product->description}}</p>
                                        @else
                                            <p style="text-align: justify;">ken@cavendishlloyd.com</p>
                                            <p style="text-align: justify;">moiz@cavendishlloyd.com</p>
                                            <p style="text-align: justify;">lee@cavendishlloyd.com</p>
                                        @endif
                                </div>


                            </div>


                                @else

                            @endif
                        </div>
                    </div>

                    </div>

                </div>
            </div>


            <script type="text/javascript">
                (function ($) {
                    "use strict";
                    $(document).ready(function () {
                        var thimpress_hotel_booking_carousel_related = $('.hb_related_other_room .rooms');
                        thimpress_hotel_booking_carousel_related.owlCarousel({
                            navigation: false,
                            pagination: false,
                            items: 3,
                            paginationSpeed: 600,
                            slideSpeed: 600,
                            autoPlay: true,
                            stopOnHover: true
                        });
                        // next
                        $('.hb_related_other_room .navigation .next').click(function () {
                            thimpress_hotel_booking_carousel_related.trigger('owl.next');
                        });
                        // prev
                        $('.hb_related_other_room .navigation .prev').click(function () {
                            thimpress_hotel_booking_carousel_related.trigger('owl.prev');
                        });
                    });
                })(jQuery);
            </script>
        </div>
    </div>



@endsection
