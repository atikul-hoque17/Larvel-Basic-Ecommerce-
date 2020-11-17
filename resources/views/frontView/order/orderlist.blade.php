@extends('frontView.master')

@section ('title_area')
a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: Soft-theme
@endsection



 

@section ('css_js')



@endsection

<style type="text/css">
  td#status p {
    float: left;
    padding: 5px;
    border-radius: 10px;
}
</style>


@section("products")


<div id="order_list" style="width: 100%;padding: 10px;margin: auto;background: #f3f3f3;">
    
<div class="alert alert-success"style="width: 80%;margin:10px auto;">
  <strong>Orders!</strong> Here is all orderlist .
</div>

<table class="table" style="background-color: #fff;width: 80%;margin: auto;    border-radius: 10px;
">
  <thead>
    <tr>
      <th scope="col">Order No</th>
      <th scope="col">Date</th>
      <th scope="col">Payment</th>
      <th scope="col">Trans ID</th>
      <th scope="col">Staus</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach( $orders as $order) 
    <tr>
      <th style="color: #01233f;font-weight: bold;">eshop{{ $order->order_number }}</th>
      <td >{{ $order->orderdate }}</td>
      <td  style="color: #0a90ff;font-weight: bold;">{{ $order->subtotal }}</td>
       <td  style="color: #0a90ff;font-weight: bold;">{{ $order->transactionno }}</td>
      <td id="status">
          @if($order->status == 1)
              <p style="background-color: #f7a715;color: #231109;"> Prending... </p>
          @elseif($order->status == 2)
              <p style="background-color: #81f715;color: #231109;"> Processing... </p>
          @elseif($order->status == 3)
              <p style="background-color: #333767;color: #ffffff;"> Delivered </p>
          @endif
      </td>
       <td><a class="btn btn-success btn-sm" href="{{ url('/order/details/order/number/'. $order->order_number) }}">View</a></td>

    </tr>
    @endforeach

  </tbody>
</table>

</div>



@endsection

 