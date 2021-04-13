<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="images/favicon.png" rel="icon" />
<link rel="icon" href="https://dearpet.in/assets/images/favicon.png" type="image/x-icon" />
<title>Dearpet - Invoice</title>
<!-- Web Fonts
======================= -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="print">

<style>
@import url("https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");


body { color: #3e3e3e; font-family: "Poppins", sans-serif; font-size:12px; line-height: 22px; }

h1, h2, h3, h4, h5, h6 { font-weight:400; margin:0; }
p { margin:0 0 10px; line-height:16px; }
.header-1 { display:inline-block;  }
.logo-img { max-width: 110px; margin-top:15px; }
.header1, .header3 { width:29%; vertical-align: top;  float:left; }
.header2 { width:40%; vertical-align:top; text-align:center; float:left;}
.header2 p { margin:0 }
.header2 h3 { font-size: 28px; text-transform: uppercase; font-weight: 500; margin-bottom: 20px; margin-top: 20px; color:#000;  }
.header3 img { float:right; }
.invoice-date p { margin-bottom: 5px; font-size: 17px; text-transform: uppercase; }
.invoice-date p span { font-size: 12px; color: #929191; display:block; }
.address_left { display: inline-block; width: 48%; }
.address_right { float: right; }
.add-titlte { text-transform: uppercase; color: #000; margin-bottom: 10px; font-weight: 500; }
.address_left p { margin:0;     line-height: 18px; }
.addrees_panel { margin-bottom: 10px; }
.product-table { margin-bottom:10px; }
.product-table table { border-collapse: collapse; width: 100%; }
.product-table td, .product-table th { border: 1px solid #969696; text-align: center; padding: 2px; font-size:12px;     line-height: 16px;}
.product-table th { text-transform:uppercase; font-weight:600; }
/* .product-table tr:nth-child(even) {
 background-color: #f8f8f8;
}*/

.product-table-tax { margin-bottom:20px; }
.product-table-tax table { border-collapse: collapse; width: 100%; }
.product-table-tax td, .product-table-tax th { border: 1px solid #969696; text-align: center; padding: 2px;     line-height: 16px; }
.product-table-tax th { text-transform:uppercase; font-weight:600; color:#000; }
.footer { border-top: 1px solid #969696; }
.footer ul { margin: 0; list-style: none; }
.footer li { width: 32.5%; display: inline-block; border-right: 1px solid #969696; text-align: center; line-height: 35px; }
.footer li:last-child { border:none }
.banks ul { margin: 0; list-style: none; padding:0 }
.banks ul li { margin: 0; }

.pancard { display:inline-block; width:49%; }
.pancard P { margin: 0; }
.bank-details { margin-bottom: 20px; border: 1px solid #969696; padding: 10px; float:left; width:100% }

.main-title{background: #292929; text-align: center; text-transform: uppercase; margin: 0 0 15px; color: #fff; font-weight: 500; line-height: 35px; line-height: 35px; font-size: 18px}



.banks {
    display: inline-block;
    border: 1px solid #969696;
    padding: 6px 16px;
    line-height: 16px;
}

</style>



</head>
<body>



<div class="invoice-container" style="font-size:12px; color: #3e3e3e; position:relative;  margin:auto; width:595px;  border:1px solid #e9e9e9; font-family:&quot;Poppins&quot;, sans-serif;">



  <h2 class="main-title" style=" background: #292929; text-align: center; text-transform: uppercase; margin: 0 0 10px; color: #fff; font-weight: 500; line-height: 28px; line-height: 28px; font-size: 16px; float: left;  width: 100%; font-family:&quot;Poppins&quot;, sans-serif;">Tax Invoice</h2>
  
	
	  <div style="padding: 0 15px 50px;">
    <div class="header-section" style=" margin: 0 0 10px; float: left; width: 100%;">
 <div class="header-1 header1" style="width: 25%; vertical-align: top;float: left;"><img src="https://dearpet.in/assets/images/dearpet-logo-with-tag.jpg" class="logo-img" alt="Dear Pet Logo" style"max-width: 125px; margin-top: 10px;"> </div>
	  	<div class="header-1 header2" style="width:45%; vertical-align:top; text-align:center; float:left;">
        <h3 style="font-size: 17px; font-weight: 500;  margin: 0;    text-transform: uppercase; color: #000; font-family:&quot;Poppins&quot;, sans-serif;"> Dear pet LLP </h3>
        <p style="font-size:12px; color: #3e3e3e; font-family:&quot;Poppins&quot;, sans-serif;"> Plot no. 8/33,
          Kirti Nagar  Industrial Area, Delhi-110015</p>
        <p style="font-size:12px; color: #3e3e3e; font-family:&quot;Poppins&quot;, sans-serif;"> <strong>GST:</strong> 07AAQFD7524E1ZC</p>
      </div>
         <div class="header-1 header3" style="width: 30%; vertical-align: top;  float: left;">
        <div class="invoice-date" style="text-align:center">		
          <p style="margin:0; line-height:16px;  font-size:12px; text-transform:uppercase; font-family:&quot;Poppins&quot;, sans-serif;  color:#000;"> Invoice Date </p>
		    <p style="margin:0 0 3px;  line-height:16px;  font-size:12px; text-transform:uppercase; font-family:&quot;Poppins&quot;, sans-serif; color: #3e3e3e;"> 10 April 2021</p>		 
		  <p style="margin:0; line-height:16px;  font-size:12px; text-transform:uppercase; font-family:&quot;Poppins&quot;, sans-serif; color:#000; ">Invoice No. </p>	 
	   <p style="margin:0 0 3px; ; line-height:16px;  font-size:12px; text-transform:uppercase; font-family:&quot;Poppins&quot;, sans-serif; color: #3e3e3e;"> 001</p>		  
          <p style="margin:0; line-height:16px;  font-size:12px; text-transform:uppercase; font-family:&quot;Poppins&quot;, sans-serif; color:#000;"> Order ID </p>	
		  	   <p style="margin:0 0 3px;   line-height:16px;  font-size:12px; text-transform:uppercase; font-family:&quot;Poppins&quot;, sans-serif; color: #3e3e3e;"> Dp10000010</p>		  
		  
		</div>
      </div>  
	  
	  
	  
	  


    </div>';	
  
    
 
  <div class="addrees_panel">
      <div class="address_left" style="width:48%; float:left;">
        <h3 class="add-titlte" style="margin:0"> Billing Address </h3>
        <p> Name -kapil</p>
        <p> Address - verma</p><br>
        <p>City - Bahadurgarh</p></br>
        <p>Landmark - nehrupark</p></br>
       <p> Pincode : 124507</p>
         
          Phone:70215067
      </div>

    
  
   <div class="address_left  address_right" style="width:48%; float:right;">
        <h3 class="add-titlte" style="margin:0" > Shipping Address </h3>
        <p> Name - Mr. kapil</p>
        <p> Address - kapil<br>
      
       
        </p>
    <p> Pincode : 124057</p></br>
        <p> Phone: 124507 </p>
        <h6 style="font-size: 12px; margin: 6px 0 ;"> <strong>Payment Mode -  </strong> Cash on Delivery</h6>
      </div>
    </div>
	
    <div class="product-table">
      <table style="font-size:12px; color: #3e3e3e; font-family:&quot;Poppins&quot;, sans-serif;">
        <tr>
          <th width="10" style="color:#000;"> SL No.</th>
          <th width="250" style="color:#000; ">Item name</th>
          <th style="color:#000"> HSN Code </th>
          <th style="color:#000"> Qty</th>
          <th width="80" style="color:#000"> Rate</th>
          <th width="100" style="color:#000"> Amount</th>
          <th  width="80" style="color:#000">  Disc.</th>
          <th width="100" style="color:#000"> Total</th>
        </tr>

     <tr>
          <td> 1</td>
          <td>Bike <br> <strong>Sku: 111100</s></td>
          <td>8712</td>
          <td>1</td>
          <td><img src='https://dearpet.in/assets/images/rupee-icon.jpg'  style='width: 8px;'>   2000</td>
          <td><img src='https://dearpet.in/assets/images/rupee-icon.jpg'  style='width: 8px;'> 20000</td>
          <td><img src='https://dearpet.in/assets/images/rupee-icon.jpg'  style='width: 8px;'>  500</td>
          <td><img src='https://dearpet.in/assets/images/rupee-icon.jpg'  style='width: 8px;'> 500</td>


         
        </tr>
      <tr>
          <td colspan="7"><strong> Shipping Charge</strong></td>        
          <td colspan="1"> <img src="https://dearpet.in/assets/images/rupee-icon.jpg"  style="width: 8px;">2000</td>
        </tr>
        <tr>
      
          <td colspan="7"><strong>  Grand Total</strong></td>
          <td colspan="1"> <img src="https://dearpet.in/assets/images/rupee-icon.jpg"  style="width: 8px;">4000</td>
        </tr>
        <tr>
          <td colspan="8" style="text-align:left"><p style="margin:0; font-size:12px; color: #3e3e3e; font-family:&quot;Poppins&quot;, sans-serif;">Amount Chargeable (In words)<br>
            </p>
      <h4 style="font-size: 13px; font-weight: 500; color: #000; font-family:&quot;Poppins&quot;, sans-serif;"> Kapil </h4></td>
			
 </tr>
      </table>
    </div>
    <div class="product-table-tax" style="float:left; width:100%">
      <div style="width:43%; float:left">
        <div class="banks">
          <ul>
            <li style="font-size:11px !important; font-weight:500; color:#000; font-family:&quot;Poppins&quot;, sans-serif;"> Bank Details </li>
            <li style="font-size:11px !important;  color: #3e3e3e; font-family:&quot;Poppins&quot;, sans-serif;"> <span> A/c Name : </span> DEAR PET LLP </li>
            <li style="font-size:11px !important;  color: #3e3e3e; font-family:&quot;Poppins&quot;, sans-serif;"> <span> Bank Name :</span> ICICI Bank </li>
            <li style="font-size:11px !important;  color: #3e3e3e; font-family:&quot;Poppins&quot;, sans-serif;"> <span> A/c No.  : </span> 664305600677 </li>
            <li style="font-size:11px !important;  color: #3e3e3e; font-family:&quot;Poppins&quot;, sans-serif;"> <span> IFS Code :</span> ICIC0006643 </li>
          </ul>
		
		    
		  
        </div>
      </div>
	  
	 
	  
	  
	  

	  
	  
	  
	  
	  
   <div style="width:55%; float:right">
        <table style="font-size:12px; color: #3e3e3e; font-family:&quot;Poppins&quot;, sans-serif;">
          <tr>
            <th style="color:#000; font-size:12px;  font-family:&quot;Poppins&quot;, sans-serif;"> Taxable Value </th>
              <th style="color:#000; font-size:12px;  font-family:&quot;Poppins&quot;, sans-serif;"> Tax Rate </th>
             <th style="color:#000; font-size:12px;  font-family:&quot;Poppins&quot;, sans-serif;"> Tax Amount </th>	
		 </tr>     
		 
      
      
        
        <tr>
            <td><img src='https://dearpet.in/assets/images/rupee-icon.jpg'  style='width: 8px;'> 4000</td>
            <td>18% </td>
            <td> <img src='https://dearpet.in/assets/images/rupee-icon.jpg'  style='width: 8px;'>  4000 </td>
          </tr>
       
       <tr>
            <th colspan="2"> TOTAL TAX AMOUNT </th>
            <th> <img src="https://dearpet.in/assets/images/rupee-icon.jpg"  style="width: 8px;">4000    </th>
          </tr>
        </table>
      </div>
    </div>
	    <p style="color:#3e3e3e; margin:0; font-size:11px;  font-family:&quot;Poppins&quot;, sans-serif;">All return and exchange will be done within 15 days of purchase </p>
     <p style="color:#3e3e3e;  margin:0; font-size:11px;  font-family:&quot;Poppins&quot;, sans-serif;">All amounts are inclusive of tax.</p>
	
	
  </div>

  
    
	
	  
    <div class="tablefooter" style="position:absolute; bottom:0; width:100%; text-align:center;">
         <table style="border-top:1px solid #dedddd; width:100%; padding: 0; margin: 0;">
          <tr>
            <td style="border-right: 1px solid #dedddd; padding: 5px; font-size:12px; color: #3e3e3e; font-family:&quot;Poppins&quot;, sans-serif;"> Contact: +91-9111888111 </td>
            <td style="border-right: 1px solid #dedddd; padding: 5px; font-size:12px; color: #3e3e3e; font-family:&quot;Poppins&quot;, sans-serif;">Email: support@dearpet.in</td>
            <td style="padding:5px; font-size:12px; color: #3e3e3e; font-family:&quot;Poppins&quot;, sans-serif;">Website: www.dearpet.in </td>
          </tr>

        </table>
        
        </div>
	
	
	
	
	
	
	
  
  
  
</div>
<h6 style="margin:10px 0; text-align:center; color:#3e3e3e; font-size:11px;">This computer generated invoice does not require any stamp or signature</h6>
</body>
</html>';
