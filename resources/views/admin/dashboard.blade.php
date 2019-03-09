@extends('layout')
@section('content')

      
<div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  @php
                   $student = DB::table('student_tbl')->count('student_id');

                  @endphp
                  <h2 class="card-title">All Student</h2>
                  <p>{{$student}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
               @php
                   $teacher = DB::table('teacher_tbl')->count('teacher_id');

                  @endphp
                  <h2 class="card-title">All Teacher</h2>
                  <p>{{$teacher}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Stock Price</h2>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Revenue</h2>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-4" class="card-float-chart"></div>
                </div>
              </div>


@endsection;