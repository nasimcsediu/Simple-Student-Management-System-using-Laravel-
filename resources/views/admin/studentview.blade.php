@extends('layout')
@section('content')

    <div class="content-wrapper">
          <h1 class="page-title">{{$manage_student_view->student_name}}</h1>

         
          <div class="row user-profile">
            <div class="col-lg-4 side-left">
              <div class="card mb-4">
                
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <label>Student Name:</label><br>
                  <p class="name">{{$manage_student_view->student_name}}</p>


                  <label>Student Department:</label><br>
                  

                  <p class="designation">@if($manage_student_view->student_department==1)
                            <span>{{'CSE'}}</span>
                            @elseif($manage_student_view->student_department==2)
                            <span>{{'EEE'}}</span>
                            @elseif($manage_student_view->student_department==3)
                            <span>{{'civil'}}</span>
                            @elseif($manage_student_view->student_department==4)
                            <span>{{'BBA'}}</span>
                            @elseif($manage_student_view->student_department==5)
                            <span>{{'MBA'}}</span>
                            @else
                            <span>{{'Not Found'}}</span>
                            @endif</p>





                  <label>Student Roll:</label><br>
                  <p class="designation">{{$manage_student_view->student_roll}}</p>

                  <a class="email" href="#">{{$manage_student_view->student_email}}</a>
                  <a class="number" href="#">{{$manage_student_view->student_phone}}</a>
                </div>
                
              </div>
              <div class="card mb-4">
                <div class="card-body overview">
                  
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>Other Information</p>
                  </div>
                  <div class="info-links">
                    <a class="website" href="#">
                     
                      <label><b>Father Name:</b></label>
                      <span>{{$manage_student_view->student_fathername}}</span>
                    </a>
                    <a class="social-link" href="#">
                      <label><b>Mother Name:</b></label>
                      <span>{{$manage_student_view->student_mothername}}</span>
                    </a>
                   

                     <a class="social-link" href="#">
                      <label><b> Admission Year:</b></label>
                      <span>{{$manage_student_view->student_admissionyear}}</span>
                    </a>

                  </div>
                </div>
              </div>
            </div>
          </div>


     
        </div>


@endsection