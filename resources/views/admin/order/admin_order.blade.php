


@extends('admin.dashboard')

@section('content_heading')
  
Order List
<br>
  {{ Session::get('message') }}

@endsection

@section('maincontent')

<style type="text/css">
  td#status p {
    float: left;
    padding: 2px 10px;
    border-radius: 10px;

}

#status_changer{
  color: #22c50e;
}
#status_changer:hover {
  color: red;
}


</style>

<div id="order_list" style="width: 100%;padding: 10px;margin: auto;background: #fff;">
    
<div class="alert alert-success"style="width: 100%;margin:10px auto;">
  <strong>Orders!</strong> Here is all orderlist .
</div>

<table class="table" style="background-color: #fff;width: 100%;margin: auto;    border-radius: 10px;
">
  <thead>
    <tr>
      <th scope="col">Order No</th>
      <th scope="col">Date</th>
      <th scope="col">Payment</th>
      <th scope="col">Trans ID</th>
      <th scope="col">Staus</th>
      <th scope="col">Processing</th>
       <th scope="col">Shipping</th>
        <th scope="col">Deliver</th>
         <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach( $orders as $order) 
    <tr style="background-color: #eaeaea">
      <th style="color: #01233f;font-weight: bold;">eshop{{ $order->order_number }}</th>
      <td >{{ $order->orderdate }}</td>
      <td  style="color: #0a90ff;font-weight: bold;">{{ $order->subtotal }}</td>
      <td  style="color: #0a90ff;font-weight: bold;">{{ $order->transactionno }}</td>
      <td id="status">
          @if($order->status == 1)
              <p style="background-color: #ffe10f;color: #231109;width: auto"> Paid... </p>
          @elseif($order->status == 2)
              <p style="background-color: #81f715;color: #231109;"> Processing... </p>
          @elseif($order->status == 3)
              <p style="background-color: #0eefbb;color: #672d2d;"> Shipping... </p>
          @elseif($order->status == 4)
              <p style="background-color: #333767;color: #ffffff;"> Delivered <i class="fas fa-smile"></i></p>    
          @endif
      </td>
       <td>
         <a href="javascript:void(0)"  data-id="{{ $order->order_number }}" class="processing"> <i  id="status_changer" class="fa fa-check" style="font-size:28px;"></i> </a>
       </td>
       <td>
         <a href="javascript:void(0)"  data-id="{{ $order->order_number }}" class="shipped"> <i id="status_changer" class="fa fa-check" style="font-size:28px;"></i></a>
       </td>
       <td>
          <a href="javascript:void(0)"  data-id="{{ $order->order_number }}" class="delivered"> <i id="status_changer" class="fa fa-check" style="font-size:28px;"></i> </a>
       </td>
       <td><a class="btn btn-success btn-sm" href="{{ url('/order/details/number/'. $order->order_number) }}">View</a></td>
    </tr>
    @endforeach

  </tbody>
</table>

</div>

<button class="btn btn-primary"onclick="window.print()">Print Order</button>
@endsection


