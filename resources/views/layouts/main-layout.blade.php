<!DOCTYPE html>
<html lang="en" dir="ltr">

  @include('partials.head')

  <body>
    <div class="wrapper">

        @include('partials.header')

      <main>
        <div class="container">

          @yield('content')

        </div>
      </main>

        @include('partials.footer')
    </div>
  </body>
</html>
