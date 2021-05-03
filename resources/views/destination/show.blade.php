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
                  <li><i class="fa fa-laptop"></i>View destination </li>						  	
              </ol>
          </div>
      </div>
        
      <div class="row">
            <div class="col-lg-12">
                <div class="panel-body">
                    @include('inc.message')
                   
                </div>
                <section class="panel">
                    {{-- <header class="panel-heading">
                        Advanced Table
                    </header> --}}
                    @if (count($dest)>0)
                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                           <tr><th><i class="icon_profile"></i> Name</th>
                                <th><i class="icon_profile"></i> Category</th>
                                <th><i class="icon_mobile"></i> Price</th>
                                <th><i class="icon_calendar"></i> Duration</th>
                                <th><i class="icon_mail_alt"></i> Inclusion</th>
                                <th><i class="icon_mail_alt"></i> Exclusion</th>
                                <th><i class="icon_mail_alt"></i> Itinerary</th>
                                <th><i class="icon_pin_alt"></i> Description</th>
                                <th><i class="icon_cogs"></i> Action</th>
                           </tr>
                           
                           @foreach($dest as $dest)
                           <tr>
                              <td>{{$dest->name}}</td>
                              <td>
                                  @foreach($cat as $cats)
                                  @if(($dest->category_id) === ($cats->id))
                                  {{$cats->name}}
                                  @endif
                                  @endforeach
                              </td>
                              <td>{{$dest->price}}</td>
                              <td>{{$dest->duration}}</td>
                              <td>{{$dest->inclusion}}</td>
                              <td>{{$dest->exclusion}}</td>
                              <td>{{$dest->itinerary}}</td>
                              <td>{{$dest->description}}</td>
                              <td>
                               <div class="btn-group">
                                   {!!Form::open(['action'=>['App\Http\Controllers\DestinationController@delete',$dest->id],'method'=>'POST']) !!}
   
                                   <a  class="btn btn-success tooltips" href="{{url('destination/edit')}}/{{$dest->id}}" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="icon_plus_alt2"></i></a>
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
                     @else 
                     <div class="alert alert-danger">
                        <p>No destinations to show !!</p>
                    </div>
                    @endif 
                        
                   
                </section>
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