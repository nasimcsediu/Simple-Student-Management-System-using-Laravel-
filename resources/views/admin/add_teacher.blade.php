@extends('layout')
@section('content')


<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                     
                      	
                          <h2 class="card-title">Add Teacher</h2>
                          <form class="forms-sample" method="post" action="{{URL::to('addteacher')}}">

                          {{ csrf_field() }}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Name</label>
                                  <input type="text"  name="teacher_name" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  
                              </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Desiganation</label>
                                  <input type="text"  class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="teacher_designation">
                                  
                              </div>

                                 <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Address</label>
                                  <input type="text"  class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="teacher_address">
                                  
                              </div>

                                  <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Phone</label>
                                  <input type="text"  class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="teacher_phone">
                                  
                              </div>

                               <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Email</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="teacher_email"/>
                                  
                              </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Department</label>
                                  <input type="text"   class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="teacher_departmentstring" />
                                  
                              </div>

                          
                            
                              

                             
                              
                              <button type="submit" class="btn btn-success btn-block">Add Teacher</button>
                          </form>
                      </div>
                  </div>
              </div>



@endsection