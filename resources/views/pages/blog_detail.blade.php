@extends('layouts.main')
@section('content')

<div class="bradcam_area bradcam_bg_4">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Single blog</h3>
                    <p>Pixel perfect design with awesome contents</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

 <!--================Blog Area =================-->
 <section class="blog_area single-post-area section-padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 posts-list">
             <div class="single-post">
                <div class="feature-img">
                   <img class="img-fluid" src="{{asset('storage/image/posts')}}/{{$post->image}}" alt="">
                </div>
                <div class="blog_details">
                   <h2> {{$post->title}}
                   </h2>
                   <ul class="blog-info-link mt-3 mb-4">
                      <li><a href="#"><i class="fa fa-user"></i> {{$post->tags}}</a></li>
                      {{-- <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li> --}}
                   </ul>
                   <p class="excert">{!! $post->description !!}
                   </p>
                  
                   {{-- <div class="quote-wrapper">
                      <div class="quotes">
                         MCSE boot camps have its supporters and its detractors. 
                      </div>
                   </div> --}}
                   
                </div>
             </div>
             <div class="navigation-top">
                <div class="d-sm-flex justify-content-between text-center">
                   <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                      people like this</p>
                   <div class="col-sm-4 text-center my-2 my-sm-0">
                      <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                   </div>
                   <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance"></i></a></li>
                   </ul>
                </div>
                
             </div>
             {{-- <div class="blog-author">
                <div class="media align-items-center">
                   <img src="img/blog/author.png" alt="">
                   <div class="media-body">
                      <a href="#">
                         <h4>Harvard milan</h4>
                      </a>
                      <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                         our dominion twon Second divided from</p>
                   </div>
                </div>
             </div> --}}
             {{-- <div class="comments-area">
                <h4>05 Comments</h4>
             </div> --}}
             {{-- <div class="comment-form">
                <h4>Leave a Reply</h4>
                <form class="form-contact comment_form" action="#" id="commentForm">
                   <div class="row">
                      <div class="col-12">
                         <div class="form-group">
                            <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                               placeholder="Write Comment"></textarea>
                         </div>
                      </div>
                      <div class="col-sm-6">
                         <div class="form-group">
                            <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                         </div>
                      </div>
                      <div class="col-sm-6">
                         <div class="form-group">
                            <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                         </div>
                      </div>
                      <div class="col-12">
                         <div class="form-group">
                            <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                         </div>
                      </div>
                   </div>
                   <div class="form-group">
                      <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                   </div>
                </form>
             </div> --}}
          </div>
          <div class="col-lg-4">
             <div class="blog_right_sidebar">
                <aside class="single_sidebar_widget post_category_widget">
                   <h4 class="widget_title">Category</h4>
                   <ul class="list cat-list">
                      <li>
                         <a href="#" class="d-flex">
                            <p>Resaurant food</p>
                            <p>(37)</p>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="d-flex">
                            <p>Travel news</p>
                            <p>(10)</p>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="d-flex">
                            <p>Modern technology</p>
                            <p>(03)</p>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="d-flex">
                            <p>Product</p>
                            <p>(11)</p>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="d-flex">
                            <p>Inspiration</p>
                            <p>(21)</p>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="d-flex">
                            <p>Health Care</p>
                            <p>(21)</p>
                         </a>
                      </li>
                   </ul>
                </aside>
                <aside class="single_sidebar_widget popular_post_widget">
                   <h3 class="widget_title">Recent Post</h3>
                   @foreach($recents as $recent)
                   <div class="media post_item">
                      <img src="{{url('storage/image/posts')}}/{{$recent->image}}" height="50px" width="60px" alt="post">
                      <div class="media-body">
                         <a href="single-blog.html">
                            <h3>{{$recent->title}}</h3>
                         </a>
                         <p>{{$recent->created_at}}</p>
                      </div>
                   </div>
                   @endforeach

            
                </aside>
                <aside class="single_sidebar_widget tag_cloud_widget">
                   <h4 class="widget_title">Tag Clouds</h4>
                   <ul class="list">
                      <li>
                         <a href="#">project</a>
                      </li>
                      <li>
                         <a href="#">love</a>
                      </li>
                      <li>
                         <a href="#">technology</a>
                      </li>
                      <li>
                         <a href="#">travel</a>
                      </li>
                      <li>
                         <a href="#">restaurant</a>
                      </li>
                      <li>
                         <a href="#">life style</a>
                      </li>
                      <li>
                         <a href="#">design</a>
                      </li>
                      <li>
                         <a href="#">illustration</a>
                      </li>
                   </ul>
                </aside>
                <aside class="single_sidebar_widget newsletter_widget">
                   <h4 class="widget_title">Newsletter</h4>
                   <form action="#">
                      <div class="form-group">
                         <input type="email" class="form-control" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                      </div>
                      <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                         type="submit">Subscribe</button>
                   </form>
                </aside>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!--================ Blog Area end =================-->
    
@endsection