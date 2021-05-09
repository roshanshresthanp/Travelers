@extends('layouts.main')
@section('content')

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Destinations</h3>
                    <p>Pixel perfect design with awesome contents</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

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


<div class="popular_places_area">
    <div class="container">
        <div class="row">

            

            {{-- {!! Form::open(['route'=>'App\Http\Controllers\DestinationController@store','method'=>'POST','class'=>"form-horizontal",'enctype'=>'multipart/form-data']) !!} --}}


            <div class="col-lg-4">
                <div class="filter_result_wrap">
                    <h3>Filter Result</h3>
                    <div class="filter_bordered">
                        <div class="filter_inner">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single_select">
{{-- {!! Form::open(['action'=>'App\Http\Controllers\PageController@filterResult','method'=>'POST','class'=>'form-horizontal']) !!}  --}}

                                        {{-- <select name="country">
                                            @foreach($cats as $cat) --}}
                                            {{-- <option data-display="Country">Country</option> --}}
                                            {{-- <option value="$cat->id">$cat->name</option>
                                            
                                            @endforeach
                                          </select> --}}
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_select">
                                          <p>  <input type="radio" name="amount" value="2500">
                                            <label for="male">less than 2,500</label></p>
                                           <p> <input type="radio" name="amount" value="10000">
                                            <label for="female">less than 10,000</label></p>
                                           <p> <input type="radio" name="amount" value="10000">
                                            <label for="other">more than 10,000</label></p>
                                    </div>
                                </div>

                               
                                {{-- <div class="col-lg-12">
                                    <div class="range_slider_wrap">
                                        <span class="range">Price range</span>
                                        <div id="slider-range"></div>
                                        <p>
                                            <input type="text" id="amount" readonly style="border:0; color:#7A838B; font-weight:400;">
                                        </p>
                                    </div>
                                </div> --}}
                            </div>


                        </div>

                        <div class="reset_btn">
                            <button class="boxed-btn4" type="submit">Search</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- {!!form::close() !!}  --}}

            <div class="col-lg-8">
                @if(count($dests)>0)
                <div class="row">
                    
                    @foreach ($dests as $dest)
                    <div class="col-lg-6 col-md-6">
                        <div class="single_place">
                            <div class="thumb">
                                <img src="img/place/1.png" alt="">
                                <a href="{{url('/inquiry')}}/{{$dest->id}}" class="prise">{{$dest->price}}</a>
                            </div>
                            <div class="place_info">
                                <a href="{{url('/inquiry')}}/{{$dest->id}}"><h3>{{$dest->name}}</h3></a>
                                <p>@if(($dest->category_id)===0)
                                    Uncategorised
                                    @endif
                                    @foreach($cats as $cat)
                                    @if(($dest->category_id) === ($cat->id))
                                {{$cat->name}}
                                @endif
                                @endforeach
                            </p>
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
                                        <a>{{$dest->duration}} days</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="d-flex justify-content-center">
                    {!! $dests->links() !!}
                                    {{-- {!! $dests->appends(['sort' => 'price'])->links() !!} --}}

                </div>

                
                    
                </div>
                @endif
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
                        <img src="img/trip/1.png" alt="">
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
                        <img src="img/trip/2.png" alt="">
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
                        <img src="img/trip/3.png" alt="">
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

    
@endsection