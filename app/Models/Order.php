<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
class Order extends Model
{
    use HasFactory;
    protected $fillable=['product_id','customer_id','qty','amount','gst','total_amount','invoice_no'];

    // public function get_cname(){
    //     return $this->belongsTo(Customer::class,'id','customer_id');
    // }
}
