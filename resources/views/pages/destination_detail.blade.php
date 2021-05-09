@extends('layouts.main')
@section('content')
<div class="destination_banner_wrap overlay">
    <div class="destination_text text-center">
        <h3>Saintmartine Iceland</h3>
        <p>Pixel perfect design with awesome contents</p>
    </div>
</div>

<div class="destination_details_info">
    <div class="container">
        <div class="row justify-content-center">
                
            <div class="col-lg-8 col-md-9">
                {{-- @foreach ($dest as $destination) --}}
                    
                
                <div class="destination_info">
                    <h4>Description</h4>
                    <p>{{$destination->description}}</p> <div class="single_destination">
                        <h4>Inclusion</h4>
                        <p>{{$destination->inclusion}}</p></div>
                    <div class="single_destination">
                        <h4>Exclusion</h4>
                        <p>{{$destination->exclusion}}</p>
                    </div>
                    <div class="single_destination">
                        <h4>Itinerary</h4>
                        <p>{{$destination->itinerary}}</p>
                    </div>
                </div>
                {{-- @endforeach --}}
                <div class="bordered_1px"></div>
                <div class="contact_join">
                    <h3>Contact for join</h3>
                    @include('inc.message')
                        

                    {!!Form::open(['action'=>['App\Http\Controllers\ContactController@inquiryStore',$destination->id],'method'=>'post']) !!}
                    {{-- @foreach($dest as $destination) --}}

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-group-icon mt-10">
                                    <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                    <input type="text" name="destination_name"  class="single-input" readonly value="{{$destination->name}}" required>
                                </div><br>                            
                            </div>
                            
                            <div class="col-lg-6 col-md-6">
                                <div class="single_input">
                                    <input type="text" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" required>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6">
                                <div class="single_input">
                                    <input type="text" name="phone" placeholder="Phone no." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone no.'" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single_input">
                                    <textarea name="message" id="" cols="30" rows="10"placeholder="Your inquiry"onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your inquiry'" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="submit_btn">
                                    <button class="boxed-btn4" type="submit">submit</button>
                                </div>
                            </div>
                        </div>
                        {{-- @endforeach --}}
                    {!! Form::close() !!}
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
                        <img src="img/place/1.png" alt="">
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
                        <img src="img/place/2.png" alt="">
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
                        <img src="img/place/3.png" alt="">
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

@endsection