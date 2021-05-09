@extends('layouts.dashboard')
@section('content')

<section id="main-content">
    <section class="wrapper">            
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
              <h3 class="page-header"><i class="fa fa-laptop"></i> Destination</h3>
              <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
                  <li><i class="fa fa-laptop"></i>Desination name</li>						  	
              </ol>
          </div>
      </div>
        
     
  <div class="panel-body">
      @include('inc.message')
      {{-- {!! Form::open(['url'=>'restaurant/create','method'=>'POST','class'=>"form-horizontal",'enctype'=>'multipart/form-data']) !!} --}}
      {!! Form::open(['action'=>'App\Http\Controllers\DestinationController@store','method'=>'POST','class'=>"form-horizontal",'enctype'=>'multipart/form-data']) !!}

      
                        {{-- <form class="form-horizontal" method="post" action="RestaurantController@store"> --}}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Destination Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" required place >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Select category</label>
                                <div class="col-sm-10">
                                    <select name="cat_name" class="form-control" required >
                                        <option value="0">Uncategorised</option>
                                        @foreach($cats as $cat)
                                        
                                        
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="col-sm-2 control-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="price" required min="0" >
                                </div>
                            </div>
                   
                             <div class="form-group">
                                <label class="col-sm-2 control-label">Duration</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="duration" required min="0">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Inclusion</label>
                                <div class="col-sm-10">
                                    <textarea  class="form-control" name="inclusion" required ></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Exclusion</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" name="exclusion" required ></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Itinerary</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="itinerary" required ></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" required ></textarea>
                                </div>
                            </div>
                           
                        <div class="form-group">
                                <label class="col-sm-2 control-label">Upload image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image">
                                </div>
                            </div>

                     <div class="panel-body">
                        
                        <input type="submit" value="Add" class="btn btn-primary">
                        {{-- {{Form::submit('Submit',['class'=>'btn btn-primary'])}} --}}
                        <input type="reset" value="Cancel" class="btn btn-danger">

                        {{-- <a href="#myModal-1" data-toggle="modal" class="btn  btn-danger">
                            Cancel
                        </a> --}}
                       
                      </div>
                      
                        {{-- </form> --}}
                        {!!Form::close()!!}
                  


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