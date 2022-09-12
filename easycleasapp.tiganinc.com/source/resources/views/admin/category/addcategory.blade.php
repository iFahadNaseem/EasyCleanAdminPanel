@extends('admin.layout.app')

@section ('content')
        <!-- remove -->
          <div class="row">
		  <div class="col-md-2">
		  </div>
            
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Category</h4><br>
                   @if (count($errors) > 0)
                      @if($errors->any())
                        <div class="alert alert-primary" role="alert">
                          <!--{{$errors->first()}}-->
                          <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close">-->
                          <!--  <span aria-hidden="true">×</span>-->
                          <!--</button>-->
                        </div>
                      @endif
                  @endif
                  <form class="forms-sample" action="{{route('addnewcategory')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                      <div class="form-group">
                      <label for="exampleInputName1">Category Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="category_name" value="" placeholder="Category Name"><br>
                      
                      
                      <div class="form-group">
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-circle img-raised">
                     </div>
                        <div class="w-50 fileinput-preview fileinput-exists thumbnail img-circle img-raised"></div>
                        <div>
                        <span class="btn btn-raised btn-round btn-rose btn-file">
                            <span class="fileinput-new">Add Photo</span>
                      <span class="fileinput-exists">Change</span>
                      <input type="file" name="image" /></span>
                            <br />
                            <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                     <a href="{{route('addcategory')}}" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
             <div class="col-md-2">
		  </div>
     
          </div>
        </div>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
        	$(document).ready(function(){
        	
                $(".des_price").hide();
                
        		$(".img").on('change', function(){
        	        $(".des_price").show();
        			
        	});
        	});
</script>

 


 @endsection