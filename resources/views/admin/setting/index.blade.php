@extends('admin.layouts.master_layout')
@section('title', 'Settings')

@section('admin_content')

<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">DataTables</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active" aria-current="page">DataTables</li>
      </ol>
    </div>

    <!-- Row -->
    <div class="row">


      <!-- DataTable with Hover -->
      <div class="col-lg-12">
          <div class="col-lg-6">
            @include('admin.message')
          </div>

        <div class="card mb-4">

          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Site Setting</h6>
         
          </div>
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
              <thead class="thead-light">
                <tr>
                    <th>Sno</th>
                    <th>Image</th>
                    <th>Product Name</th>
              <th>Category</th>
                <th>Brand</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Created At</th>

                  <th>Action</th>

                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>Sno</th>
                    <th>Image</th>
                    <th>Product Name</th>
              <th>Category</th>
                <th>Brand</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Created At</th>

                  <th>Action</th>

                </tr>
              </tfoot>
              <tbody>

@foreach ($data as $item)
<tr>
    <td>{{$loop->iteration}}</td>
    <td><img src="{{asset('storage/product_images/'.$item->image)}}" width="100px" height="100px" alt=""></td>
    <td>{{$item->name}}</td>
    <td>{{$item->get_cat->category_name}}</td>
    <td>{{$item->get_brand->brand_name}}</td>
    <td>{{$item->short_desc}}</td>
    <td>
        @if($item->status==1)
        <span class="badge badge-success">Active</span>
        @else
        <span class="badge badge-danger">Inactive</span>
        @endif
    </td>
    <td>{{$item->created_at->diffforhumans()}}</td>
    <td>
        <form action="{{route('coupon.destroy',$item->id)}}" method="post" style="display:inline">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="sumit">Delete </button>
        </form>
        @if($item->status==1)
        <a class="btn btn-success" href="{{url('admin/product/status/0',$item->id)}} ">Active</a>
        @else
        <a class="btn btn-danger" href="{{url('admin/product/status/1',$item->id)}} ">Deactive</a>
        @endif
<a class="btn btn-warning" href="{{route('product.edit',$item->id)}}">Edit</a>

    </td>


  </tr>
@endforeach




              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--Row-->

    <!-- Documentation Link -->




  </div>



@endsection
