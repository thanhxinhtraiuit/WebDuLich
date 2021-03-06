@extends("website.layouts.master")

@section("styles")
{{-- <style>
.content {
  padding:0px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}
        </style>
@endsection --}}

@section("content")





<div class="destination_banner_wrap overlay">
    

    
    

        <div class="destination_text text-center">
            <h3>Saintmartine Iceland</h3>
            <p>Pixel perfect design with awesome contents</p>
        </div>
</div>



    


        <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>{{ $nameType }}</h3>

                    </div>
                </div>
            </div>
            <div class="row ">
           
                <div class="col-lg-4 " >
                    <div class="filter_result_wrap">
                        <h3>Tìm Kiếm:</h3>
                        <div class="filter_bordered">
                            <form action="" id="filter-form" flag="2" method="get">
                            <div class="filter_inner">
                                <div class="row">
                                    
                                    <div class="col-lg-12">
                                        
                             {{--            <div class="single_select">
                                            <h3 style="margin-bottom: 10px; font-family: -webkit-body; font-weight:  bolder;">Loại Tour</h3>
                                            <select name="typeTour" >

                                                 @foreach ($type_tour as $element)
                               <option 
                               @if(isset($tour->tour_type_tour_id))
                               @if ($tour->tour_type_tour_id == $element->id)
                                 {{'selected'}}
                               @endif 
                               @endif
                               value="{{$element->id}}">{{$element->name}}</option>
                           @endforeach
                                              </select>
                                        </div> --}}
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_select">
                                            <h3 style="margin-bottom: 10px; font-family: -webkit-body; font-weight:  bolder;">Nơi khởi hành</h3>
                                            <select name="place_start">
                                                @foreach ($placeStart as $element)
                                                     <option value="{{ $element->place_start }}">{{ $element->place_start }}</option>
                                                @endforeach
                                               

                                              </select>
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-12">
                                        <div class="single_select">
                                            <h3 style="margin-bottom: 10px; font-family: -webkit-body; font-weight:  bolder;">Điểm Đến</h3>
                                            <select>
                                                <option data-display="Travel type">Điểm Đến</option>
                                                <option value="1">advance</option>
                                                <option value="2">advance</option>
                                                <option value="4">premium</option>
                                              </select>
                                        </div>
                                    </div> --}}
                                    <div class="col-lg-12">
                                        <div class="single_select">
                                            <h3 style="margin-bottom: 10px; font-family: -webkit-body; font-weight:  bolder;">Giá</h3>
                                            <select name="price">
                                                
                                                <option value="1">Từ 1 - 3 triệu</option>
                                                <option value="2">Từ 3 - 5 triệu</option>
                                                <option value="3">Từ 5 - 7 triệu</option>
                                                <option value="4">Từ 7 - 9 triệu</option>
                                                <option value="5">Trên 9 triệu</option>
                                              </select>
                                        </div>
                                    </div>
                                    
                                    {{-- <div class="col-lg-12">
                                        <div class="range_slider_wrap">
                                            <span class="range">Prise range</span>
                                            <div id="slider-range"></div>
                                            <p>
                                                <input type="text" id="amount" readonly style="border:0; color:#7A838B; font-weight:400;">
                                            </p>
                                        </div>
                                    </div> --}}
                                </div>


                            </div>

                            <div class="reset_btn">
                                <button class="boxed-btn4 " type="submit">Tìm</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row loadHere">
                  {{--       @foreach($tour as $value)
                        <div class="col-lg-6 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                     <img src="{{asset($value->image)}}" alt="">
                                    <a href="{{ asset("destination").'/'.$value->id }}" class="prise">{{ number_format($value->price) }} VNĐ</a>
                                </div>
                                <div class="place_info">
                                    <a href="{{ asset("destination").'/'.$value->id }}"><h3>{{$value->name}}</h3></a>
                                    <p>{{ $nameType }}</p>
                                    <div class="rating_days d-flex justify-content-between">
                                        <span class="d-flex justify-content-center align-items-center">
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i> 
                                             <i class="fa fa-star"></i>
                                             <a href="#">(20 Review)</a>
                                        </span>
                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="#">{{ $value->tour_date }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach --}}
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="more_place_btn text-center">
                                <button class="boxed-btn4 loadMore " page='0' flag="1" >More Places</button>
                            </div>
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
    <!-- newletter_area_end  -->

    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>More Places</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{asset('website/img/place/1.png')}}" alt="">
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="#"><h3>California</h3></a>
                            <p>United State of America</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i>
                                     <a href="#">(20 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">5 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{asset('website/img/place/2.png')}}" alt="">
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="#"><h3>Korola Megna</h3></a>
                            <p>United State of America</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i>
                                     <a href="#">(20 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">5 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{asset('website/img/place/3.png')}}" alt="">
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="#"><h3>London</h3></a>
                            <p>United State of America</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i>
                                     <a href="#">(20 Review)</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">5 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script src="js/main.js"></script> --}}
 {{--    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
    </script> --}}
    


{{--     <script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    $('#hideMyHeader').show();
    $('.filter_result_wrap').css('width','83%');

  } else {
    header.classList.remove("sticky");
    $('#hideMyHeader').hide();
    $('.filter_result_wrap').css('width','100%');
  }
}
</script> --}}
@endsection
@section('scripts')
        <script>
function loadMore(page,typetour,place_start,price){
             var abc= Number(page)+1;

           $.ajax({
                    url:"{{ route('loadMoreTour') }}",
                    method:'get',
                    dataType:'json',
                    data:{
                        page:page,
                        typetour:typetour,
                        place_start:place_start,
                        price:price
                    },
                    success : function(data){
                          
                        if(data.status){
                            var html = "";
                            
                            $('.loadMore').attr('page',abc);
                            for(var i = 0 ; i < data.data.length ; i++){
                                html=html + ' <div class="col-lg-6 col-md-6">'+
                            '<div class="single_place">'+
                                '<div class="thumb">'+
                                     '<img src="/'+data.data[i].image+'" alt="">'+
                                   ' <a href="/destination/'+data.data[i].id+'" class="prise"> '+data.data[i].price+'VNĐ</a>'+
                               ' </div>'+
                      '          <div class="place_info">'+
                                 '   <a href="/destination/'+data.data[i].id+'"><h3>'+data.data[i].name+'</h3></a>'+
                                    '<p>" '+data.data[i].nametype+' "</p>'+
                                   ' <div class="rating_days d-flex justify-content-between">'+
                                    '    <span class="d-flex justify-content-center align-items-center">'+
                                     '        <i class="fa fa-star"></i> '+
                                    '         <i class="fa fa-star"></i> '+
                                             '<i class="fa fa-star"></i> '+
                                             '<i class="fa fa-star"></i> '+
                                             '<i class="fa fa-star"></i>'+
                                             '<a href="#">(20 Review)</a>'+
                                        '</span>'+
                                        '<div class="days">'+
                                            '<i class="fa fa-clock-o"></i>'+
                                            '<a href="#">'+data.data[i].tour_date+'</a>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>';

                            }
                      
                            $('.loadHere').append(html);
                        }
                    }
                });
}
 $(document).ready(function (){

var typetour={{ $typetour }};
var place_start=null;
var price=null;

            $(document).on('click','.loadMore',function(){
                
                var page = $(this).attr('page');
               
                loadMore(page,typetour,place_start,price);
             

                
            });
            $('.loadMore').trigger('click');

            $('#filter-form').on('submit',function(e){
                e.preventDefault();
              // typetour = $('select[name="typetour"]').find('option:selected').val();
                place_start = $('select[name="place_start"]').find('option:selected').val();
               price = $('select[name="price"]').find('option:selected').val();
                 $('.loadHere').html('');
                  var page=0;
                 $(this).attr('page',page);
                loadMore(page,typetour,place_start,price);
                
            });



});
    </script>
@endsection