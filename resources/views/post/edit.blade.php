
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
                  <li><i class="fa fa-laptop"></i>Edit post</li>						  	
              </ol>
          </div>
      </div>
        
      <div class="row">
            <div class="col-lg-12">
                <div class="panel-body">
                    @include('inc.message')
                    {{-- {!! Form::open(['url'=>'category/add','method'=>'POST','class'=>"form-horizontal",'enctype'=>'multipart/form-data']) !!} --}}
      {!! Form::open(['action'=>['App\Http\Controllers\PostController@update',$post->id],'method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}

      
                        {{-- <form class="form-horizontal" method="post" action="RestaurantController@store"> --}}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title" required placeholder="Post title" value="{{$post->title}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Body</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="body" placeholder="Body description" required >{{$post->description}}</textarea>
                                </div>
                            </div>
                             
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tags</label>
                                <div class="col-sm-10">
                                    <input type="text" class="tagsinput" id="tagsinput" name="tags" required placeholder="Tags" value="{{$post->tags}}">
                                </div>
                            </div>
                        {{-- <div class="form-group">
                                <label class="col-sm-2 control-label">Photo</label>
                                <div class="col-sm-10">
                                    <input type="file" name="photo">
                                </div>
                            </div> --}}
                   
                   
                            {{Form::hidden('_method','PUT')}}

                     <div class="panel-body">
                        
                        <input type="submit" value="Update" class="btn btn-primary">
                        {{-- {{Form::submit('Submit',['class'=>'btn btn-primary'])}} --}}
                        <input type="reset" value="Cancel" class="btn btn-danger">
                        {{-- <a href="#myModal-1" data-toggle="modal" class="btn  btn-danger">
                            Cancel
                        </a> --}}
                       
                      </div>
                      
                        {{-- </form> --}}
                        {!!Form::close()!!}
                </div>
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
