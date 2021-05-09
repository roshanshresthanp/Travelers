@extends('layouts.dashboard')
@section('content')
<section id="main-content">
    <section class="wrapper">            
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
              <h3 class="page-header"><i class="fa fa-laptop"></i> Posts</h3>
              <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
                  <li><i class="fa fa-laptop"></i>View posts</li>						  	
              </ol>
          </div>
      </div>
        
      <div class="row">
        <div class="col-lg-12">
            <div class="panel-body">
                @include('inc.message')
               
            </div>
            @if(count($posts)>0)
            <section class="panel">
                {{-- <header class="panel-heading">
                    Advanced Table
                </header> --}}
                <table class="table table-striped table-advance table-hover">
                    <tbody>
                       <tr><th><i class="icon_profile"></i> Title</th>
                            <th><i class="icon_document_alt"></i> Body</th>
                            <th><i class="icon_mobile"></i> Tags</th>
                            <th><i class="icon_table"></i> Image</th>
                            <th><i class="icon_profile"></i> Posted by</th>
                            <th><i class="icon_cogs"></i> Action</th>
                       </tr>
                       
                       @foreach($posts as $post)
                       <tr>
                          <td>{{$post->title}}</td>
                          <td>{{str_limit($post->description, 150)}}</td>
                          <td>{{$post->tags}}</td>
                          <td>{{$post->image}}</td>
                          <td>
                            @foreach($users as $user)
                            @if(($post->user_id) === ($user->id))
                            {{$user->email}}
                            @endif
                            @endforeach
                        </td>
                          
                          <td>
                           <div class="btn-group">
                            
                            @if(!Auth::guest()) {{-- Not for guests--}}
                            @if(Auth::user()->id === $post->user_id)



                               {!!Form::open(['action'=>['App\Http\Controllers\PostController@destroy',$post->id],'method'=>'POST']) !!}
                               <a  class="btn btn-success tooltips" href="{{url('posts')}}/{{$post->id}}/edit" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="icon_plus_alt2"></i></a>

                               {{-- <input type="submit" class="btn btn-primary"> --}}
                               {{-- <input type="submit" class="btn btn-primary" value=""><i class="icon_check_alt2"></i></a> --}}
                           
                               {{Form::hidden('_method','DELETE')}}

                               <button type="submit" class="btn btn-danger tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                               {{-- {{Form::submit('',['class'=>'btn btn-danger']) }} --}}
                               <i class="icon_close_alt2">
                               </i></button>
                           </a>
                               {!!Form::close()!!}
                            @endif 
                            @endif
                               
                           </div>
                           </td>
                       </tr> 
                       @endforeach
                                                
                    </tbody>
                 </table>
                 
                    
               
            </section>
            <div class="d-flex justify-content-center">
                {!! $posts->links() !!}
            </div>
            @else 
                 <div class="alert alert-danger">
                    <p>No post to show !!</p>
                </div>
                @endif 
        </div>
    </div>
        
    

            </div>
            <div class="widget-foot">
              <!-- Footer goes here -->
            </div>
          </div>
        </div>
        
      </div>
                  
    </div> 
        <!-- project team & activity end -->

    </section>
</section>

@endsection