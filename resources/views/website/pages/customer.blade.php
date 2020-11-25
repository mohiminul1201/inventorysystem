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
   <h1 class="title">Customer</h1>
   <p class="text-center text-danger font-weight-bold">Customer Summary</p>
   <form class="contact-form row" action="index" method="POST">
      @csrf
       <div class="form-field col-lg-6">
         <input  class="input-text js-input" type="text" autocomplete="off" required>
         <label class="label" for="name">Secrial number</label>
      </div>
      <div class="form-field col-lg-6 ">
          <input  class="input-text js-input" type="text" autocomplete="off" required>
         <label class="label" for="email">Customer</label>
      </div>
      <div class="form-field col-lg-6 ">
          <input  class="input-text js-input" type="text" autocomplete="off" required>
         <label class="label" for="company">Opening Balance</label>
      </div>
       <div class="form-field col-lg-6 ">
         <input  class="input-text js-input" type="text" autocomplete="off" required>
         <label class="label" for="phone">Purchase</label>
      </div>
      <div class="form-field col-lg-12">
          <input  class="input-text js-input" type="text" autocomplete="off" required>
         <label class="label" for="message">payment</label>
      </div>
      <div class="form-field col-lg-6">
         <input  class="input-text js-input" type="text" autocomplete="off" required>
         <label class="label" for="message">Closing Balance</label>
      </div>
     
      <div class="form-field col-lg-12">
         <input class="submit-btn" type="submit" value="Submit">
      </div>
   </form>
</section>
 -->



<table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Secrial number</th>
      <th scope="col">Customer</th>
      <th scope="col">Opening Balance</th>
      <th scope="col">Purchase</th>
      <th scope="col">payment</th>
      <th scope="col">Closing Balance</th>
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