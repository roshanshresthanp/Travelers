@extends('layouts.dashboard')
@section('content')
<section id="main-content">
    <section class="wrapper">            
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
              <h3 class="page-header"><i class="fa fa-laptop"></i> Category</h3>
              <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
                  <li><i class="fa fa-laptop"></i>Edit Category</li>						  	
              </ol>
          </div>
      </div>
        
      <div class="row">
            <div class="col-lg-12">
                <div class="panel-body">
                    @include('inc.message')
                    {!! Form::open(['action'=>['App\Http\Controllers\CategoryController@update',$cat->id],'method'=>'POST','class'=>"form-horizontal",'enctype'=>'multipart/form-data']) !!}
      {{-- {!! Form::open(['action'=>'RestaurantController@store','method'=>'POST']) !!} --}}

      
                        {{-- <form class="form-horizontal" method="post" action="RestaurantController@store"> --}}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" required placeholder="Country name" value="{{$cat->name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" placeholder="Country description" required> {{$cat->description}}</textarea>
                                </div>
                            </div>
                        {{-- <div class="form-group">
                                <label class="col-sm-2 control-label">Upload logo</label>
                                <div class="col-sm-10">
                                    <input type="file" name="logo">
                                </div>
                            </div> --}}
                   
                   
                            {{Form::hidden('_method','PUT')}}

         <div class="panel-body">
                        
                        <input type="submit" value="Update" class="btn btn-primary">
                        {{-- {{Form::submit('Submit',['class'=>'btn btn-primary'])}} --}}
                        <input type="reset" value="Reset" class="btn btn-danger">
                        {{-- <a href="#myModal-1" data-toggle="modal" class="btn  btn-danger">
                            Cancel
                        </a> --}}
                       
                      </div>
                      
                        {{-- </form> --}}
                        {!!Form::close()!!}
                </div>
                @if (count($cats)>0)
                <section class="panel">
                    {{-- <header class="panel-heading">
                        Advanced Table
                    </header> --}}
                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                           {{-- <tr><th><i class="icon_profile"></i> Restaurant Id</th> --}}
                              <th><i class="icon_profile"></i> Category Name</th>
                              <th><i class="icon_pin_alt"></i> Description</th>
                                 {{-- <th><i class="icon_mobile"></i> Contact</th> --}}
                             
                              {{-- <th><i class="icon_mail_alt"></i> Email</th> --}}
                              <th><i class="icon_cogs"></i> Action</th>
                           </tr>
                           @foreach($cats as $cat)
                           <tr>
                             {{-- <td>{{$rest->id}}</td> --}}
                              <td>{{$cat->name}}</td>
                              <td>{{$cat->description}}</td>
                              <td>
                               <div class="btn-group">
                                   {!!Form::open(['action'=>['App\Http\Controllers\CategoryController@delete',$cat->id],'method'=>'POST']) !!}
   
                                   <a  class="btn btn-success tooltips" href="{{url('category/edit')}}/{{$cat->id}}" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="icon_plus_alt2"></i></a>
                                   {{-- <input type="submit" class="btn btn-primary"> --}}
                                   {{-- <input type="submit" class="btn btn-primary" value=""><i class="icon_check_alt2"></i></a> --}}
                               
                                   {{Form::hidden('_method','DELETE')}}

                                   <button type="submit" class="btn btn-danger tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                   {{-- {{Form::submit('',['class'=>'btn btn-danger']) }} --}}
                                   <i class="icon_close_alt2">
                                   </i></button>
                               </a>
                                   {!!Form::close()!!}
                                   
                                   
                               </div>
                               </td>
                           </tr>
                           @endforeach      
                        </tbody>
                     </table>
                        
                </section>
                @else 
                <div class="alert alert-danger">
                   <p>No categories to show !!</p>
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