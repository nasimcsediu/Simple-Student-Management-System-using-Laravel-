@extends('layout')
@section('content')

    <div class="content-wrapper">
          <h1 class="page-title">{{$teacher_views->teacher_name}}</h1>

         
          <div class="row user-profile">
            <div class="col-lg-4 side-left">
              <div class="card mb-4">
                
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <label>Teacher Name:</label><br>
                  <p class="name">{{$teacher_views->teacher_name}}</p>


                  <label>Teacher Designation:</label><br>
                  <p class="designation">{{$teacher_views->teacher_designation}}</p>

                  <label>Teacher Email:</label><br>
                  <a class="email" href="#">{{$teacher_views->teacher_email}}</a>

                  <label>Teacher Phone:</label><br>

                  <a class="number" href="#">{{$teacher_views->teacher_phone}}</a>

                  <label>Teacher Address:</label><br>
                  <a class="number" href="#">{{$teacher_views->teacher_address}}</a>

                  <label>Teacher Department:</label><br>
                   <a class="number" href="#">{{$teacher_views->teacher_departmentstring}}</a>

                </div>
                
              </div>
              
            </div>
          </div>


     
        </div>


@endsection