@extends('layout')
@section('content')


<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                      	<p class="alert-success">
                      		<?php
                           $data = Session::get('message');
                        if ($data) {
                        	
                        	echo $data;
                        	Session::put('data',null);
                        }

                      		?>
                      		
                      	</p>
                          <h2 class="card-title">Add Student</h2>
                          <form class="forms-sample" method="post" action="{{URL::to('student_update',$student_edit->student_id)}}">

                          {{ csrf_field() }}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" value="{{($student_edit->student_name)}}" name="student_name" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  
                              </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Student Roll</label>
                                  <input type="text"  class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="student_roll" value="{{$student_edit->student_roll}}">
                                  
                              </div>

                                 <div class="form-group">
                                  <label for="exampleInputEmail1">Student Father Name</label>
                                  <input type="text"  class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="student_fathername" value="{{$student_edit->student_fathername}}">
                                  
                              </div>

                                  <div class="form-group">
                                  <label for="exampleInputEmail1">Student Mother Name</label>
                                  <input type="text"  class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="student_mothername" value="{{$student_edit->student_mothername}}">
                                  
                              </div>

                               <div class="form-group">
                                  <label for="exampleInputEmail1">Student Email</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="student_email" value="{{$student_edit->student_email}}" />
                                  
                              </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Student Phone</label>
                                  <input type="text"   class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="student_phone" value="{{$student_edit->student_phone}}">
                                  
                              </div>

                          
                              
                           
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password"  class="form-control p-input" id="exampleInputPassword1" name="student_pass" value="{{$student_edit->student_pass}}">
                              </div>
                              

                             
                              
                              <button type="submit" class="btn btn-success btn-block">Update information</button>
                          </form>
                      </div>
                  </div>
              </div>



@endsection