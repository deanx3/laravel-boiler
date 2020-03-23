<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Company Form</title>
        @include('layout.header')
        @stack('css')

      <div id="app">
          @auth
                @include('layout.nav')
          @endauth
       
        <main class="py-4">

          @yield('content')
              
        </main>
        </div>

        
        @include('layout.footer')
        @stack('js')
       
</body>
</html>
