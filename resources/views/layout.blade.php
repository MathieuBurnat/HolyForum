<!DOCTYPE html>
<html lang="en">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

  @include("component/header")

  
  <body>
    @yield ('content')
  </body>

    @include('flash-message')
    @include("component/footer")
</html>