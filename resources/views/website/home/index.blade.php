
@extends("website.layouts.master")
@section("content")
<div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Cam Ranh</h3>
                                <p>Sự Hiếu Khách Và Thân Thiện</p>
                                <a href="#" class="boxed-btn3">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Hội An</h3>
                                <p>Không Khí Bình Yên Nhẹ Nhàng</p>
                                <a href="#" class="boxed-btn3">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_3 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Nha Trang</h3>
                                <p>Thành Phố Du Lịch Biển Nổi Tiếng Nhất Việt Nam</p>
                                <a href="#" class="boxed-btn3">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
    <!-- slider_area_end -->

    <!-- where_togo_area_start  -->
    <div class="where_togo_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="form_area">
                        <h3>Where you want to go?</h3>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="search_wrap">
                        <form class="search_form" action="#">
                            <div class="input_field">
                                <input type="text" placeholder="Where to go?">
                            </div>
                            <div class="input_field">
                                <input id="datepicker" placeholder="Date">
                            </div>
                            <div class="input_field">
                                <select>
                                    <option data-display="Travel type">Travel type</option>
                                    <option value="1">Some option</option>
                                    <option value="2">Another option</option>
                                </select>
                            </div>
                            <div class="search_btn">
                                <button class="boxed-btn4 " type="submit" >Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- where_togo_area_end  -->
    
    <!-- popular_destination_area_start  -->
    <div class="popular_destination_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Điểm Đến Phổ Biến</h3>
                        <p>Hơn 125 bãi biển, 22 di sản thế giới được UNESCO công nhận, hơn 3.000 cảnh quan và khu di tích được công nhận là di sản quốc gia, 8 khu dự trữ sinh quyển thế giới,... </p>
                    </div>
                </div>
            </div>
            <div class="row">
                 @foreach($typetour as $value)
                 {{-- <a href="{{ asset("type").'/'.$value->id }}" > --}}
                <div class="col-lg-4 col-md-6">
                  
                    
                    <div class="single_destination">
                        
                        <div class="thumb">
                            
                            <img src="{{$value['image']}}" alt="">
                           
                        </div>
                        
                        <div class="content">
                            {{-- <p class="d-flex align-items-center">{{ $value['name'] }} <a href="travel_destination.html">  07 Places</a> </p> --}}
                             <p class="d-flex align-items-center">
                            <a href="{{ asset("type").'/'.$value->id }}" >{{ $value['name'] }}</a>
                            {{-- <a href="{{ asset("type").'/'.$value->id }}">  {{ count($value) }} Places</a> </p> --}}
                            
                            <?php
                            $count=0;
                            ?>

                            @foreach ($alltour as $key)
                            <?php
                            
                                
                                if(($key->tour_TypeTour_id)==($value->id))
                                    $count++;
                               
                            ?>
                            @endforeach
                              
                            <a href="{{ asset("type").'/'.$value->id }}">{{ $count }} Places</a> </p>
                            
                        </div>
                        
                    </div>
                  
                    
                </div>
                
                 @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="more_place_btn text-center">
                    <a class="boxed-btn4" href="#">More Places</a>
                </div>
            </div>
        </div>
    </div>

    <!-- popular_destination_area_end  -->

    
    <!-- newletter_area_end  -->

    
            


    <div class="video_area video_bg overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video_wrap text-center">
                        <h3>Enjoy Video</h3>
                        <div class="video_icon">
                            <a class="popup-video video_play_button" href="https://www.youtube.com/watch?v=M2o-AnFChT4">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="travel_variation_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="{{ asset ('website/img/svg_icon/1.svg') }}" alt="">
                        </div>
                        <h3>Hành trình thoải mái</h3>
                        <p>Tạo cảm giác thoải mái nhất cho khách hàng trong mỗi chuyến đi</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="{{ asset ('website/img/svg_icon/2.svg') }}" alt="">
                        </div>
                        <h3>Khách sạn sang trọng</h3>
                        <p>Lựa chọn khách sạn tốt nhất đảm bảo sự hài lòng của khách hàng</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="{{ asset ('website/img/svg_icon/3.svg') }}" alt="">
                        </div>
                        <h3>Hướng dẫn viên du lịch</h3>
                        <p>Vui vẻ, nhiệt tình, thân thiện với khách hàng </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- testimonial_area  -->
    <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="{{asset('website/img/testmonial/author.png')}}" alt="">
                                        </div>
                                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                        <div class="testmonial_author">
                                            <h3>- Micky Mouse</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="{{asset('website/img/testmonial/author.png')}}" alt="">
                                        </div>
                                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                        <div class="testmonial_author">
                                            <h3>- Tom Mouse</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="{{asset('website/img/testmonial/author.png')}}" alt="">
                                        </div>
                                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                        <div class="testmonial_author">
                                            <h3>- Jerry Mouse</h3>
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
    <!-- /testimonial_area  -->
    

    <div class="recent_trip_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Recent Trips</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="{{asset('website/img/trip/1.png')}}" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Oct 12, 2019</span>
                            </div>
                            <a href="#">
                                <h3>Journeys Are Best Measured In
                                    New Friends</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="{{asset('website/img/trip/2.png')}}" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Oct 12, 2019</span>
                            </div>
                            <a href="#">
                                <h3>Journeys Are Best Measured In
                                    New Friends</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="{{asset('website/img/trip/3.png')}}" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Oct 12, 2019</span>
                            </div>
                            <a href="#">
                                <h3>Journeys Are Best Measured In
                                    New Friends</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newletter_area_start  -->
    <div class="newletter_area overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="newsletter_text">
                                <h4>Subscribe Our Newsletter</h4>
                                <p>Subscribe newsletter to get offers and about
                                    new places to discover.</p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="mail_form">
                                <div class="row no-gutters">
                                    <div class="col-lg-9 col-md-8">
                                        <div class="newsletter_field">
                                            <input type="email" placeholder="Your mail" >
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="newsletter_btn">
                                            <button class="boxed-btn4 " type="submit" >Subscribe</button>
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
@endsection