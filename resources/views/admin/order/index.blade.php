@extends('admin.layouts.master_layout')
@section('page_active','active')
@section('title', 'Categories')
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
            <h6 class="m-0 font-weight-bold text-primary">Orders</h6>
       
          </div>
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
              <thead class="thead-light">
                <tr>
                    <th>Sno</th>
                  <th>Order Id</th>
                  <th>Customer Name</th>
                  <th>Product Name</th>
                <th>Qty</th>
                <th>Gst Amount</th>
                <th>Amount</th>
                <th>Total Amount</th>
                <th>Invoice No</th>
                <th>Created At</th> 
                  <th>Action</th>
          
            

                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Sno</th>
                  <th>Order Id</th>
                  <th>Customer Name</th>
                  <th>Product Name</th>
                <th>Qty</th>
                <th>Gst Amount</th>
                <th>Amount</th>
                <th>Total Amount</th>
                <th>Invoice No</th>
                <th>Created At</th>
                  <th>Action</th>
                
                </tr>
              </tfoot>
              <tbody>

@foreach ($data as $item)
<tr>
  <td>{{$loop->iteration}}</td>
    <td>{{$item->id}}</td>
    <td>{{$item->customer_id->get_cname()}}</td>
    <td>{{$item->product_id}}</td>
    <td>{{$item->qty}}</td>
    <td>{{$item->gst}}</td>
    <td>{{$item->amount}}</td>
    <td>{{$item->total_amount}}</td>
    <td>{{$item->invoice_no}}</td>
    <td>{{$item->created_at->diffforhumans()}}</td>
    {{-- <td>
        @if($item->status==1)
        <span class="badge badge-success">Active</span>
        @else
        <span class="badge badge-danger">Inactive</span>
        @endif
    </td> --}}
    
    <td>
       

<a class="btn btn-warning" href="{{route('order.edit',$item->id)}}">Edit</a>

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
