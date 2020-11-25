@extends('store.layout.default')

@section('content')
	
<div class="text-center">
   
   <button type="button" class="btn btn-primary"><a class="text-light" href=" {{ URL::to('store/purchase') }} "> Purchase </a></button>
<button type="button" class="btn btn-secondary"><a class="text-light" href="{{ URL::to('store/sales') }}">sales</a></button>
<button type="button" class="btn btn-success"><a class="text-light" href="{{ URL::to('store/inventory') }}">inventory</a></button>
<button type="button" class="btn btn-danger"><a class="text-light" href="{{ URL::to('store/supplier') }}">supplier</a></button>
<button type="button" class="btn btn-warning"><a class="text-light" href="{{ URL::to('store/customer') }}" >customer</a></button>

</div>
<!------ Include the above in your HEAD tag ---------->

<section class="get-in-touch">
   <h1 class="title">SUPPLIER</h1>
   <p class="text-center text-danger font-weight-bold">Supplier Summary</p>
   <form class="contact-form row" action="{{URL::to('sup_add')}}" method="post">
     {{ csrf_field() }}
      <div class="form-field col-lg-6">
         <input  class="input-text js-input" name="secrial_number" type="text" autocomplete="off" required>
         <label class="label" for="name">Secrial number</label>
      </div>
      <div class="form-field col-lg-6 ">
          <input  class="input-text js-input" name="sup_name" type="text" autocomplete="off" required>
         <label class="label" for="email">Supplier</label>
      </div>
     <!--  <div class="form-field col-lg-6 ">
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
      </div> -->
     
      <div class="form-field col-lg-12">
         <input class="submit-btn" type="submit" value="Submit">
      </div>
   </form>
</section>
@stop