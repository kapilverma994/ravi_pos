@extends('admin.layouts.master_layout')
@section('page_active','active')
@section('title', 'Categories')
@section('admin_content')








@foreach ($data as $item)

  <td>{{$loop->iteration}}</td>
    <td>{{$item->id}}</td>
    <td>{{$item->customer_name}}</td>
    <td>{{$item->phone}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->qty}}</td>
    <td>{{$item->gst}}</td>
    <td>{{$item->amount}}</td>
    <td>{{$item->total_amount}}</td>
    <td>{{$item->invoice_no}}</td>
    <td>{{Carbon\Carbon::parse($item->created_at)->diffforhumans()}}</td>





@endforeach







@endsection
