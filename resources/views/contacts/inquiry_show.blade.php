@extends('layouts.dashboard')
@section('content')
<section id="main-content">
    <section class="wrapper">            
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
              <h3 class="page-header"><i class="fa fa-laptop"></i> Inquiries</h3>
              <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
                  <li><i class="fa fa-laptop"></i>Contacts for join</li>						  	
              </ol>
          </div>
      </div>
        
      <div class="row">
            <div class="col-lg-12">
                <div class="panel-body">
                    @include('inc.message')

                </div>
                @if (count($inquiry)>0)
                <section class="panel">
                    {{-- <header class="panel-heading">
                        Advanced Table
                    </header> --}}
                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                           {{-- <tr><th><i class="icon_profile"></i> Restaurant Id</th> --}}
                            <th><i class="icon_calendar"></i> Date</th>
                              <th><i class="icon_pin"></i> Destination</th>
                              <th><i class="icon_mobile_alt"></i> Phone</th>
                              <th><i class="icon_mail_alt"></i> Message</th>
                            <th><i class="icon_table"></i> Subject</th>
                              <th><i class="icon_cogs"></i> Action</th>
                           </tr>
                           @foreach($inquiry as $in)
                           <tr>
                             <td>{{$in->created_at}}</td>
                             <td>{{$in->destination_name}}</td>
                              <td>{{$in->name}}</td>
                              <td>{{$in->phone}}</td>
                              <td>{{$in->message}}</td>
                              <td>{{$in->subject}}</td>
                              <td>
                               <div class="btn-group">
                                   {!!Form::open(['action'=>['App\Http\Controllers\ContactController@delete',$in->id],'method'=>'POST']) !!}
                               
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
                   <p><strong>No inquiries to show !! </strong></p>
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