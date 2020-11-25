<!DOCTYPE html>
<html lang="en">
@include('website.include.head')
<body>
@include('website.include.nav')
<!-- @include('website.include.navbar') -->
  <!-- Start your project here-->
  @yield('content')
  <!-- End your project here-->

  <!-- jQuery -->
 @include('website.include.script')

</body>
</html>
