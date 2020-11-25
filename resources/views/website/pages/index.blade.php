@extends('website.layout.default')

@section('content')
	

<!------ Include the above in your HEAD tag ---------->

<div class="container text-center pt-5">
	<div class="text-center">
   
   <button type="button" class="btn btn-primary"><a class="text-light" href=" {{ URL::to('/purchase') }} "> Purchase </a></button>
<button type="button" class="btn btn-secondary"><a class="text-light" href="{{ URL::to('/sales') }}"></a>sales</button>
<button type="button" class="btn btn-success"><a class="text-light" href="{{ URL::to('/inventory') }}">inventory</a></button>
<button type="button" class="btn btn-danger"><a class="text-light" href="{{ URL::to('/supplier') }}">supplier</a></button>
<button type="button" class="btn btn-warning"><a class="text-light" href="{{ URL::to('/customer') }}" >customer</a></button>

</div>

   <h1>WELLCOME</h1>
   <div class="marquee " style="color: red">
      Inventory Management System
      
   </div>



</div>


@stop