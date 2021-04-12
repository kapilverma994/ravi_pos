@extends('admin.layouts.master_layout')
@section('title', 'Edit Brand')
@section('admin_content')
@section('page_active','active')


<div class="container-fluid ">

<h1>Edit Brand</h1>
<div class="row mt-5">

    <div class="col-lg-8">
      <!-- Form Basic -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>
        <div class="card-body">
          <form action="{{route('brand.update',$data->id)}}" method="post">
            @method('put')
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Brand Name</label>
              <input type="text" name="brand" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter Brand Name" value="{{$data->brand_name}}" autocomplete="off" required >
                @error('category')
                <span class="text-danger">  {{$message}}</span>

                @enderror

            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>
@endsection
