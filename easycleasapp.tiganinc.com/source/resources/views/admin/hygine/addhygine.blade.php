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
                        " role="tab " aria-controls="user-profile-info " aria-selected="true ">Add Price</a>
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
                              <form class="forms-sample" action="{{route('addnewhygine')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                
                                 <div class="form-group">
                    <label for="exampleFormControlSelect3">Select Child Category </label>
                    
                    <select class="form-control form-control-sm" id="exampleFormControlSelect3 " name="child_category_id">
                        <option value="0">No Category Selected</option>
                      @foreach($child_category as $category)
		          	<option value="{{$category->child_category_id}}">{{$category->child_name}}</option>
		              @endforeach
		              
                    </select>
                    </div>

                                <div class="form-group">
                                  <label for="banner_name">Price</label>
                                  <input type="text" class="form-control" id="banner_name" name="price" placeholder="Add Price">
                                </div>


                                

                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                                <a href="" class="btn btn-light">back</a>
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