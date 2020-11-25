@extends('store.layout.default')

@section('content')
<!-- Default form register -->
<!--   <br>
  <div class="container col-md-4">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
  </div> -->

 
<div class="container">
    <form class="text-center border border-light p-5" method="post" action=" {{URL::to('Customer_add')}} ">
      {{ csrf_field() }}

    <p class="h4 mb-4">Sign up</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="" name="firstname" class="form-control" placeholder="First name">
       
          @if ($errors->first('firstname'))
    <div class="alert alert-danger">
        {{$errors->first('firstname') }}
           
    </div>
    @endif
     </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="" name="lastname" class="form-control" placeholder="Last name">
            @if ($errors->first('lastname'))
    <div class="alert alert-danger">
        {{$errors->first('lastname') }}
           
    </div>
    @endif
        </div>
    </div>

    <!-- E-mail -->
    <input type="text" id="" name="email" class="form-control mb-4" placeholder="E-mail">
    @if ($errors->first('email'))
    <div class="alert alert-danger">
        {{$errors->first('email') }}
           
    </div>
    @endif
    <!-- Password -->
    <input type="password" id="" name="password" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    @if ($errors->first('password'))
    <div class="alert alert-danger">
        {{$errors->first('password') }}
           
    </div>
    @endif
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        At least 8 characters and 1 digit
    </small>

    <!-- Phone number -->
    <input type="text" id="" class="form-control" name="number" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
    @if ($errors->first('number'))
    <div class="alert alert-danger">
        {{$errors->first('number') }}
           
    </div>
    @endif
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        Optional - for two step authentication
    </small>

    <!-- Newsletter -->
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
        <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
    </div>

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Sign in</button>

    <!-- Social register -->
    <p>or Login:</p>
    <a href=" {{URL::to('admin/login')}} " target="_blank">Log in</a>

    <hr>

    <!-- Terms of service -->
    <p>By clicking
        <em>Sign up</em> you agree to our
        <a href="" target="_blank">terms of service</a>

</form>
    
</div>
<!-- Default form register -->
@stop