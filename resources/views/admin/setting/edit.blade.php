  @extends('admin.layouts.master_layout')
  @section('title', ' Create Product')
  @section('admin_content')


  <div class="container-fluid ">

  <h1>Site Setting</h1>
  <div class="row mt-5">

      <div class="col-lg-8">
        <!-- Form Basic -->
        @include('admin.message') 
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
          </div>
      
          <div class="card-body">
        
            <form action="{{route('setting.update',$data->id)}}" method="post">
              @csrf
              @method('put')
              <div class="form-group">
                <label for="exampleInputEmail1"> App Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                  placeholder="Enter Product Name" value="{{$data->app_name}}" autocomplete="off" required >
                  @error('name')
                  <span class="text-danger">  {{$message}}</span>

                  @enderror

              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="file" name="image" value="{{$data->image}}" class="form-control" id="exampleInputPassword1" autocomplete="off" >
            @error('image')
            <span class="text-danger">  {{$message}}</span>

                @enderror
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Gst Number</label>
                  <input type="text" class="form-control" name="gst" value="{{$data->gst_no}}">

            
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tax</label>
                  <input type="text" class="form-control" name="tax" value="{{$data->tax}}">

            
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone</label>
                  <input type="text" class="form-control" name="phone" value="{{$data->phone}}">

            
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Address</label>
                  <input type="text" class="form-control" name="address" value="{{$data->address}}">

            
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="text" class="form-control" name="email" value="{{$data->email}}">

            
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Order Format</label>
                  <input type="text" class="form-control" name="oid" value="{{$data->oid_format}}">

            
                </div>
                <div class="form-group">

                <textarea name="info" id="" class="form-control" cols="30" rows="10">{{$data->info}}</textarea>
              
                </div>
                <div class="form-group">

  
                <input type="text" class="form-control" name="hsn" value="{{$data->hsn_code}}">
              </div>
            
                {{-- <div class="form-group">
                  <label for="exampleInputPassword1">Keywords </label>
                  <input type="text" name="keyword" value="{{$data->keywords}}" class="form-control" id="exampleInputPassword1" placeholder="Enter keyword" autocomplete="off" required>
              @error('keyword')
              <span class="text-danger">  {{$message}}</span>

                  @enderror
                </div> --}}
                {{-- <div class="form-group">
                  <label for="exampleInputPassword1">Uses </label>
                  <input type="text" name="uses" value="{{$data->uses}}" class="form-control" id="exampleInputPassword1" placeholder="Enter uses" autocomplete="off" required>
              @error('uses')
              <span class="text-danger">{{$message}}</span>

                  @enderror
                </div> --}}
                {{-- <div class="form-group">
                  <label for="exampleInputPassword1">Warranty </label>
                  <input type="text" name="warranty" value="{{$data->warranty}}" class="form-control" id="exampleInputPassword1" placeholder="Enter warranty" autocomplete="off" required>
              @error('warranty')
              <span class="text-danger">  {{$message}}</span>

                  @enderror
                </div> --}}
        
        
                {{-- <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
        <textarea name="description" class="form-control" id="" cols="30" rows="8">{{$data->description}}</textarea>
              @error('description')
              <span class="text-danger">  {{$message}}</span>

                  @enderror
                </div> --}}
                {{-- <div class="form-group">
                  <label for="exampleInputPassword1">Specification</label>
        <textarea name="tech_spec" class="form-control" id="" cols="30" rows="8">{{$data->tech_spec}}</textarea>
              @error('tech_spec')
              <span class="text-danger">  {{$message}}</span>

                  @enderror
                </div> --}}


              <button type="submit" class="btn btn-primary">Update</button>
            </form>
          </div>
        </div>
      </div>
      </div>
  </div>
  @endsection
