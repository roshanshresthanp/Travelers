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
                  <li><i class="fa fa-laptop"></i>Add Category</li>						  	
              </ol>
          </div>
      </div>
        
      <div class="row">
            <div class="col-lg-12">
                <div class="panel-body">
                    @include('inc.message')
                    {!! Form::open(['url'=>'category/add','method'=>'POST','class'=>"form-horizontal",'enctype'=>'multipart/form-data']) !!}
      {{-- {!! Form::open(['action'=>'RestaurantController@store','method'=>'POST']) !!} --}}

      
                        {{-- <form class="form-horizontal" method="post" action="RestaurantController@store"> --}}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" required placeholder="Country name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" placeholder="Country description"></textarea>
                                </div>
                            </div>
                             
                    {{-- <div class="form-group">
                                <label class="col-sm-2 control-label">Contact</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="contact" required placeholder="Restaurant / caffe contact">
                                </div>
                            </div>
                         --}}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Upload image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" required>
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
                              <th><i class="icon_documents_alt"></i> Description</th>
                              <th><i class="icon_document_alt"></i> Image</th>
                             
                              {{-- <th><i class="icon_mail_alt"></i> Email</th> --}}
                              <th><i class="icon_cogs"></i> Action</th>
                           </tr>
                           @foreach($cats as $cat)
                           <tr>
                             {{-- <td>{{$rest->id}}</td> --}}
                              <td>{{$cat->name}}</td>
                              <td>{{$cat->description}}</td>
                              <td>{{$cat->image}}</td>
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
                            <div class="d-flex justify-content-center">
                                {!! $cats->links() !!}
                            </div>
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