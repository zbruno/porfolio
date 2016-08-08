<!doctype html>
<html lang="en">
  @include('layouts.sections._head')
  <body>
    <div class="preloader">
      <div class="status">&nbsp;</div>
    </div>
    @include('layouts.sections._top_bar')

    @yield('content')

    <div class="alerts-container"></div>
      
    @include('layouts.sections._footer')
    @include('layouts.sections._scripts')
    <script src="{{ elixir('js/app.js') }}"></script>
  </body>
</html>
