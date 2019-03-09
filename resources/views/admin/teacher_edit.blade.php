@extends('layout')
@section('content')


<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                     
                      	
                          <h2 class="card-title">Add Teacher</h2>
                          <form class="forms-sample" method="post" action="{{URL::to('teacher_update',$teacher_edts->teacher_id)}}">

                          {{ csrf_field() }}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Name</label>
                                  <input type="text"  name="teacher_name" class="form-control p-input" id="exampleInputEmail1" value="{{($teacher_edts->teacher_name)}}" aria-describedby="emailHelp">
                                  
                              </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Desiganation</label>
                                  <input type="text"  class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="teacher_designation" value="{{($teacher_edts->teacher_designation)}}">
                                  
                              </div>

                                 <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Address</label>
                                  <input type="text"  class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="teacher_address" value="{{($teacher_edts->teacher_address)}}">
                                  
                              </div>

                                  <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Phone</label>
                                  <input type="text"  class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="teacher_phone" value="{{($teacher_edts->teacher_phone)}}">
                                  
                              </div>

                               <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Email</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="teacher_email" value="{{($teacher_edts->teacher_email)}}" />
                                  
                              </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Department</label>
                                  <input type="text"   class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="teacher_departmentstring" value="{{($teacher_edts->teacher_departmentstring)}}" />
                                  
                              </div>

                          
                            
                              

                             
                              
                              <button type="submit" class="btn btn-success btn-block">update Teacher</button>
                          </form>
                      </div>
                  </div>
              </div>



@endsection