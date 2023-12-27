<!DOCTYPE html>
    <html lang="en">
   @include('front.partials.head')
    <body>
        <!--==================== HEADER ====================-->
      @include('front.partials.header')

        <!--==================== MAIN ====================-->
        @yield('content')

        <!--==================== FOOTER ====================-->
        @include('front.partials.footer')
        
        @include('front.partials.scripts')
    </body>
</html>
