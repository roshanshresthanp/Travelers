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
                  <li><i class="fa fa-laptop"></i>Edit Destination</li>						  	
              </ol>
          </div>
      </div>
        
     
  <div class="panel-body">
      {{-- {!! Form::open(['url'=>['restaurant/{{$rest->id}}'],'method'=>'POST','class'=>"form-horizontal"]) !!} --}}
      
      {!! Form::open(['action'=>['App\Http\Controllers\DestinationController@update',$dest->id],'method'=>'POST','class'=>"form-horizontal"]) !!}
      
                        {{-- <form class="form-horizontal" method="post" action="App\Http\Controllers\RestaurantController@store" method="POST">  --}}
                            {{-- <div class="form-group">
                                <label class="col-sm-2 control-label">Id</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{$dest->id}}" readonly>
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name"  value="{{$dest->name}}">
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-2 control-label">price</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="address" required value="{{$dest->price}}">
                                </div>
                            </div>
                   
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Select category</label>
                                <div class="col-sm-10">
                                    <select name="cat_name" class="form-control" required >
                                        
                                        @foreach($cats as $cat)
                                        @if(($dest->category_id === $cat->id))
                                        <option value="{{$dest->id}}" selected>{{$cat->name}}</option>
                                        @endif
                                        
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="col-sm-2 control-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="price" required value="{{$dest->price}}" >
                                </div>
                            </div>
                   
                             <div class="form-group">
                                <label class="col-sm-2 control-label">Duration</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="duration" required value="{{$dest->duration}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Inclusion</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inclusion" required value="{{$dest->inclusion}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Exclusion</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="exclusion" required value={{$dest->exclusion}}>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Itinerary</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="itinerary" required value="{{$dest->itinerary}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" required >{{$dest->description}}</textarea>
                                </div>
                            </div>
                           
                        {{-- <div class="form-group">
                                <label class="col-sm-2 control-label">Upload image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image">
                                </div>
                            </div> --}}
                   
                   
                   
                   {{Form::hidden('_method','PUT')}}
      
    

         <div class="panel-body">
                        
                        {{-- <input type="submit" value="Update" class="btn btn-primary"> --}}
                        {{Form::submit('Update',['class'=>'btn btn-primary'])}}
                        <input type="reset" value="Cancel" class="btn btn-danger">
                        {{-- <input type="submit" value="Update" class="btn btn-success"> --}}

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