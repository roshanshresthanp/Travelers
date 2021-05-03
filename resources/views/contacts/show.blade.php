@extends('layouts.dashboard')
@section('content')
hjghjg
<section id="main-content">
    <section class="wrapper">            
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
              <h3 class="page-header"><i class="fa fa-laptop"></i> Contacts</h3>
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

                </div>
                @if (count($con)>0)
                <section class="panel">
                    {{-- <header class="panel-heading">
                        Advanced Table
                    </header> --}}
                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                           <tr>
                              {{-- <th><i class="icon_profile"></i> Restaurant Id</th> --}}
                             <th><i class="icon_calendar"></i> Date</th>
                              <th><i class="icon_profile"></i> Name</th>
                              <th><i class="icon_mail_alt"></i> Email</th>
                              <th><i class="icon_chat_alt"></i> Message</th>
                                <th><i class="icon_table"></i> Subject</th>
                              <th><i class="icon_cogs"></i> Action</th>
                           </tr>
                           @foreach($con as $cont)
                           <tr>
                             <td>{{$cont->created_at}}</td>
                              <td>{{$cont->name}}</td>
                              <td>{{$cont->email}}</td>
                              <td>{{$cont->message}}</td>
                              <td>{{$cont->subject}}</td>
                              <td>
                               <div class="btn-group">
                                   {!!Form::open(['action'=>['App\Http\Controllers\ContactController@delete',$cont->id],'method'=>'POST']) !!}
                               
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
                   <p>No Messages to show !!</p>
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
dsds
<table>
    <tr onclick="window.open('tel:900300400');">
      <td>Phone: 900 300 400</td>
    </tr>
  </table>
  dsds

@endsection