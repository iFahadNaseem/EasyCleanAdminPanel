@extends('admin.layout.app')

@section('content')

        <!-- remove -->
          <div class="row profile-page">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="profile-body pt-0 pt-sm-4">
                    <ul class="nav tab-switch " role="tablist ">
                      <li class="nav-item ">
                        <a class="nav-link active " id="user-profile-info-tab " data-toggle="pill " href="#user-profile-info
                        " role="tab " aria-controls="user-profile-info " aria-selected="true ">Add Banner</a>
                      </li>
                    </ul>
                    <div class="row ">
                      <div class="col-2 col-md-2"></div>
                      <div class="col-8 col-md-8">
                        <div class="tab-content tab-body " id="profile-log-switch ">
                          <div class="card">
                            <div class="card-body">
                              @if (count($errors) > 0)
                                  @if($errors->any())
                                    <div class="alert alert-primary" role="alert">
                                      {{$errors->first()}}
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                      </button>
                                    </div>
                                  @endif
                              @endif
                              <!-- <h4 class="card-title">Change Password</h4> -->
                              <form class="forms-sample" action="{{route('adminAddNewBanner')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                
                                 

                                <div class="form-group">
                                  <label for="banner_name">banner name :</label>
                                  <input type="text" class="form-control" id="banner_name" name="banner_name" placeholder="banner name" value="{{old('banner_name')}}">
                                </div>

                                <div class="form-group">
                                <label>Image :</label>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                          <div class="fileinput-new thumbnail img-raised">

                                          </div>
                                          <div class="w-50 fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                          <div class="text-right">
                                          <span class="btn btn-raised btn-round btn-rose btn-file">
                                  
                                            select Image
                                            <input type="file" name="banner_image" />
                                          </span>
                                                <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput">
                                                <i class="fa fa-times"></i> Remove</a>
                                          </div>
                                    
                                
                                    </div>
                                    </div>
                

                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                                <a href="{{route('adminBanner')}}" class="btn btn-light">back</a>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-2 col-md-2"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->

@endsection