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
                          <form class="forms-sample" method="post" action="{{URL::to('addstudent')}}">

                          {{ csrf_field() }}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" name="student_name" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" required="">
                                  
                              </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Student Roll</label>
                                  <input type="text" name="student_roll" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Roll" required="">
                                  
                              </div>

                                 <div class="form-group">
                                  <label for="exampleInputEmail1">Student Father Name</label>
                                  <input type="text" name="student_fathername" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Father Name" required="">
                                  
                              </div>

                                  <div class="form-group">
                                  <label for="exampleInputEmail1">Student Mother Name</label>
                                  <input type="text" name="student_mothername" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mother Name" required="">
                                  
                              </div>

                               <div class="form-group">
                                  <label for="exampleInputEmail1">Student Email</label>
                                  <input type="text" name="student_email" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="">
                                  
                              </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Student Phone</label>
                                  <input type="text" name="student_phone" name="student_email" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone" required="">
                                  
                              </div>

                          
                                <div class="form-group">
                                  <label for="exampleTextarea">Student_Address</label>
                                  <textarea class="form-control p-input" id="exampleTextarea" name="student_address" rows="3" required=""></textarea>
                              </div>

                           
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" name="student_pass" class="form-control p-input" id="exampleInputPassword1" placeholder="Password" required="">
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputEmail1">Student Department</label>
                                  <select class="form-control p-input" name="student_department" required="">
                                  	<option value="1">CSE</option>
                                  	<option value="2">EEE</option>
                                  	<option value="3">civil</option>
                                  	<option value="4">BBA</option>
                                  	<option value="5">MBA</option>

                                  </select>
                                  
                              </div>

                               <div class="form-group">
                                  <label for="exampleInputEmail1">Student Admission year</label>
                                  <input type="date" name="student_admissionyear" name="student_email" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Admission year" required="">
                                  
                              </div>
                              
                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>



@endsection