<!DOCTYPE html>
<html lang="en">
    @include('store.include.single.head')
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
               @yield('login')
            </div>
            @include('store.include.single.footer')
        </div>
        @include('store.include.single.script')
    </body>
</html>
