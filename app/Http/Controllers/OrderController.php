<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $data=DB::table('orders')->leftjoin('products','orders.product_id','products.id')->leftjoin('customers','orders.customer_id','customers.id')->where('orders.gst','!=',0)->select('orders.*','customers.name as customer_name','customers.phone','products.name')->get();

     return view('admin.order.index',compact('data'));
    }
public function without_gst(){
    $data=DB::table('orders')->leftjoin('products','orders.product_id','products.id')->leftjoin('customers','orders.customer_id','customers.id')->where('orders.gst','==',0)->select('orders.*','customers.name as customer_name','customers.phone','products.name')->where('orders.gst',0)->get();

    return view('admin.order.index',compact('data'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pro=Product::latest()->get();
        return view('admin.order.create',compact('pro'));
    }
    public function exportpdf($id=null){


        $data=DB::table('orders')->leftjoin('products','orders.product_id','products.id')->leftjoin('customers','orders.customer_id','customers.id')->where('orders.id',$id)->select('orders.*','customers.name as customer_name','customers.phone','customers.address','customers.city','customers.pincode','products.name')->first();

        $setting=Setting::latest()->first();

        return view('admin.order.invoice',compact('data','setting'));
       
        $pdf= PDF::loadView('admin.order.invoice', compact('data','setting'));
        return $pdf->download('invoice.pdf');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cname'=>'required',
           'phone'=>'required',
           'cadd'=>'required',
           'p_id'=>'required',
           'city'=>'required',
 'qty'=>'required',
           'amount'=>'required',
           'total_amount'=>'required',
        ]);
        $tax=Setting::where('id',1)->value('tax');


     $cuser=Customer::create(['name'=>$request->cname,'email'=>$request->email,'phone'=>$request->phone,'address'=>$request->cadd,'city'=>$request->city,'pincode'=>$request->pincode]);




    // $res= Order::create(['product_id'=>$request->p_id,'customer_id'=>$cuser->id,'qty'=>$request->qty,'amount'=>$request->amount,'total_amount'=>$request->total_amount,'gst'=>$gst]);

    $order=new Order();

    $order->product_id=$request->p_id;
    $order->customer_id=$cuser->id;
    $order->qty=$request->qty;
    $order->amount=$request->amount;
    $order->total_amount=$request->total_amount;
    $tax_amount=($request->total_amount * $tax)/100;
    if($request->check_gst==1){
        $order->gst=$tax_amount;
    }


   $res= $order->save();


    if($res){
    //     $old_order=Order::find($order->id);
    //     $invoice=$old_order->invoice_no;
    //    $invoice+=1;
    //     $old_order->save();


           return redirect()->route('order.index')->with('success',"Order Created Successfully");
       }else{
           return redirect()->back()->with('erros','Something went wrong!!');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $data=Order::find($order->id);
        return view('admin.order.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
