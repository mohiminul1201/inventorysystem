@extends('website.layout.default')

@section('content')
<div class="text-center">
   
   <button type="button" class="btn btn-primary"><a class="text-light" href=" {{ URL::to('/purchase') }} "> Purchase </a></button>
<button type="button" class="btn btn-secondary"><a class="text-light" href="{{ URL::to('/sales') }}">sales</a></button>
<button type="button" class="btn btn-success"><a class="text-light" href="{{ URL::to('/inventory') }}">inventory</a></button>
<button type="button" class="btn btn-danger"><a class="text-light" href="{{ URL::to('/supplier') }}">supplier</a></button>
<button type="button" class="btn btn-warning"><a class="text-light" href="{{ URL::to('/customer') }}" >customer</a></button>

</div>
<!------ Include the above in your HEAD tag ---------->

<!-- <section class="get-in-touch">
   <h1 class="title">Purchase</h1>
   <p class="text-center">STOCK IN</p>
   <form class="contact-form row" action="index" method="POST">
      @csrf
      <div class="form-field col-lg-6">
         <input  class="input-text js-input" type="text" autocomplete="off" required>
         <label class="label" for="name">Suppllers</label>
      </div>
      <div class="form-field col-lg-6 ">
          <input  class="input-text js-input" type="text" autocomplete="off" required>
         <label class="label" for="email">invoice No</label>
      </div>
      <div class="form-field col-lg-6 ">
          <input  class="input-text js-input" type="text" autocomplete="off" required>
         <label class="label" for="company">Product_code</label>
      </div>
       <div class="form-field col-lg-6 ">
         <input  class="input-text js-input" type="text" autocomplete="off" required>
         <label class="label" for="phone">Product_description</label>
      </div>
      <div class="form-field col-lg-12">
          <input  class="input-text js-input" type="text" autocomplete="off" required>
         <label class="label" for="message">Quantity</label>
      </div>
      <div class="form-field col-lg-6">
         <input  class="input-text js-input" type="text" autocomplete="off" required>
         <label class="label" for="message">Rate</label>
      </div>
      <div class="form-field col-lg-6">
          <input  class="input-text js-input" type="text" autocomplete="off" required>
         <label class="label" for="message">Amount</label>
      </div>
      <div class="form-field col-lg-6">
          <input  class="input-text js-input" type="text" autocomplete="off" required>
         <label class="label" for="message">Payment</label>
      </div>
      <div class="form-field col-lg-12">
         <input class="submit-btn" type="submit" value="Submit">
      </div>
   </form>
</section> -->

<table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Suppllers</th>
      <th scope="col">invoice No</th>
      <th scope="col">Product_code</th>
      <th scope="col">Product_description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Rate</th>
      <th scope="col">Amount</th>
      <th scope="col">Payment</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>

@stop