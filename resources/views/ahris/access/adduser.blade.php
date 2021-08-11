@extends('ahris.access.layouts.app') 

@section('sidebar')
@include('ahris.access.layouts.sidebar')
@parent
@endsection


    <!-- Navbar -->
    @section('navbar')
    @include('ahris.access.layouts.navbar')
    @parent
    @endsection
    <!-- End Navbar -->

    @section('main-content')
    <div class="content">
      <div class="container-fluid">
        <div class="col-md-8 col-12 mr-auto ml-auto">
          <!--      Wizard container        -->
          <div class="wizard-container">
            <div class="card card-wizard" data-color="rose" id="wizardProfile">
              <form action="" method="">
                <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                <div class="card-header text-center">
                  <h3 class="card-title">
                    Build Employee Login
                  </h3>
                  <h5 class="card-description">This information will be used as login credential for the User</h5>
                </div>
                <div class="wizard-navigation">
                  <ul class="nav nav-pills">
                    <li class="nav-item">
                      <a class="nav-link active" href="#about" data-toggle="tab" role="tab">
                        About
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#account" data-toggle="tab" role="tab">
                        Type Account
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#address" data-toggle="tab" role="tab">
                        Address
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="about">
                      <h5 class="info-text"> Let's start with the basic information</h5>
                      <div class="row justify-content-center">
                        <div class="col-sm-4">
                          <div class="picture-container">
                            <div class="picture">
                              <img src="{{ asset('material/img/default-avatar.png')}}" class="picture-src" id="wizardPicturePreview" title="" />
                              <input type="file" id="wizard-picture" disabled>
                            </div>
                            <h6 class="description">Choose Picture</h6>
                          </div>
                        </div>
                        <div class="col-sm-6">

                      

                          <div class="input-group form-control-lg">
                            
                            <!-- connected to sa AhrisAccessController finddata-->
                              <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" title="Single Select" tabindex="-98" id="emp_id" data-size="7">
                                <option disabled selected>Import Data from AHRIS</b></option>
                                 @foreach ($list as $data_)
                                 <option value="{{$data_->employeeID}}">{{$data_->lastName}}, {{$data_->firstName}} {{$data_->middleName}} - {{$data_->employeeID}}</option>
                                 @endforeach
                                
                              </select>
                          </div>

                          <div class="input-group form-control-lg">
                            <!-- connected to sa script na nasa baba-->
                            <p></p>
                            
                        </div>
                          

                          <div class="input-group form-control-lg">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="material-icons">face</i>
                              </span>
                            </div>
                            <div class="form-group" id=>
                              <label for="lastname" class="bmd-label-floating">Last Name (required)</label>
                              <input type="text" class="form-control" id="lastname" name="lastname" required>
                            </div>
                          </div>

                          <div class="input-group form-control-lg">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="material-icons">face</i>
                              </span>
                            </div>
                            <div class="form-group">
                              <label for="firstname" class="bmd-label-floating">First Name (required)</label>
                              <input type="text" class="form-control" id="firstname" name="firstname" required>
                            </div>
                          </div>
                          
                          <div class="input-group form-control-lg">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="material-icons">face</i>
                              </span>
                            </div>
                            <div class="form-group">
                              <label for="middlename" class="bmd-label-floating">Middle Name (required)</label>
                              <input type="text" class="form-control" id="middlename" name="middlename" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-10 mt-3">
                          <div class="input-group form-control-lg">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="material-icons">email</i>
                              </span>
                            </div>
                            <div class="form-group">
                              <label for="email" class="bmd-label-floating">Email (required)</label>
                              <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="account">
                      <h5 class="info-text"> User Type </h5>
                      <div class="row justify-content-center">
                        <div class="col-lg-10">
                          <div class="row">
                            <div class="col-sm-4">



                              


                              <div class="choice" data-toggle="wizard-checkbox">
                                
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="choice" data-toggle="wizard-checkbox">
                                <select class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select" data-size="7">
                                  <option disabled selected>Choose Type</option>
                                  <option value="superadministrator">Super Admin</option>
                                  <option value="administrator">Administrator</option>
                                  
                                  <option value="emp">Employee</option>
                                  <option value="admin-ahris">AHRIS (Administrator)</option>
                                  <option value="admin-access">AHRIS (Access Manager)</option>
                                  <option value="admin-benefits">AHRIS (Benefit Manager )</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="choice" data-toggle="wizard-checkbox">
                                
                              </div>
                             
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="address">
                      <div class="row justify-content-center">
                        <div class="col-sm-12">
                          <h5 class="info-text"> Are you living in a nice area? </h5>
                        </div>
                        <div class="col-sm-7">
                          <div class="form-group">
                            <label>Street Name</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label>Street No.</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-5">
                          <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-5">
                          <div class="form-group select-wizard">
                            <label>Country</label>
                            <select class="selectpicker" data-size="7" data-style="select-with-transition" title="Single Select">
                              <option value="Afghanistan"> Afghanistan </option>
                              <option value="Albania"> Albania </option>
                              <option value="Algeria"> Algeria </option>
                              <option value="American Samoa"> American Samoa </option>
                              <option value="Andorra"> Andorra </option>
                              <option value="Angola"> Angola </option>
                              <option value="Anguilla"> Anguilla </option>
                              <option value="Antarctica"> Antarctica </option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="mr-auto">
                    <input type="button" class="btn btn-previous btn-fill btn-default btn-wd disabled" name="previous" value="Previous">
                  </div>
                  <div class="ml-auto">
                    <input type="button" class="btn btn-next btn-fill btn-rose btn-wd" name="next" value="Next">
                    <input type="button" class="btn btn-finish btn-fill btn-rose btn-wd" name="finish" value="Finish" style="display: none;">
                  </div>
                  <div class="clearfix"></div>
                </div>
              </form>
            </div>
          </div>
          <!-- wizard container -->
        </div>
      </div>
    </div>

    @endsection

    <!--footer -->
    @section('footer')
    @include('ahris.access.layouts.footer')
    @parent
    @endsection
    <!--footer -->

    <!--side filter -->
    @section('sidefilter')
    @include('ahris.access.layouts.sidefilter')
    @parent
    @endsection
    <!-- side filter -->

    <!--   Core JS Files   -->
    @section('corejs')
    @include('layouts.corejs')
    @parent
    @endsection
<!--   Core JS Files   -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 



<!--  Connected to sa dropdown sa taas yung emp selection -->
<script text="text/javascript">
  $(document).ready(function() {

    $(document).on('change', '#emp_id', function(){
      //console.log('change in id');

      var EmpolyeeID=$(this).val();
      //console.log(EmpolyeeID);
      var div=$(this).parent();

      $.ajax({
          type:'get',
          url:'{{route('ahris/accessmanager/finddata')}}',
          data:{'id':EmpolyeeID},
          success:function(data){
            console.log('success');
            console.log(data);

            //echo sa p ung output
            $("p").empty().append(data[0].employeeID);

          },
          error:function(){
            console.log('error');
          }

      });

    });
    
  });
</script>

<!--   Script Plugins -->
    @section('adminplugin')
    @include('ahris.access.layouts.plugins.adminplugin')
    @parent
    @endsection
<!--   Script Plugins -->

<!--   Wizard Plugins -->
@section('pageplugin')
@include('ahris.access.layouts.wizard')
@parent
@endsection
<!--   Script Plugins -->