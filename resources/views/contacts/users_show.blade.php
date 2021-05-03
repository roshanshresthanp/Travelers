@extends('layouts.dashboard')
@section('content')
<section id="main-content">
    <section class="wrapper">            
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
              <h3 class="page-header"><i class="fa fa-laptop"></i> Users</h3>
              <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
                  <li><i class="fa fa-laptop"></i>View user</li>						  	
              </ol>
          </div>
      </div>
        
      <div class="row">
            <div class="col-lg-12">
                <div class="panel-body">
                    @include('inc.message')

                </div>
                @if (count($users)>0)
                <section class="panel">
                     {{-- <header class="panel-heading">
                        Advanced Tablesss
                    </header>  --}}
                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                           <tr>
                            <th><i class="icon_profile"></i> Name</th>
                            <th><i class="icon_mail_alt"></i> Email</th>
                            <th><i class="icon_calendar"></i> Reg. Date</th>

                              {{-- <th><i class="icon_cogs"></i> Action</th> --}}
                           </tr>
                           @foreach($users as $user)
                           <tr>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td>{{$user->created_at}}</td>

                              <!-- <td>
                               <div class="btn-group">
                                   {{-- {!!Form::open(['action'=>['App\Http\Controllers\ContactController@delete',$cont->id],'method'=>'POST']) !!} --}}
                               
                                   {{-- {{Form::hidden('_method','DELETE')}} --}}

                                   <button type="submit" class="btn btn-danger tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                    {{-- {{Form::submit('',['class'=>'btn btn-danger']) }}  --}}
                                   <i class="icon_close_alt2">
                                   </i></button>
                               </a>
                                   {{-- {!!Form::close()!!} --}}
                                   
                                   
                               </div>
                               </td> -->
                           </tr>
                           @endforeach      
                        </tbody>
                     </table>
                        
                </section>
                @else 
                <div class="alert alert-danger">
                   <p>No users to show !!</p>
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