<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/app.css">
  <title>@yield('title-block')</title>
</head>
<body>
  @include('front.inc.header')

  <div class="container mt-5">
    <div class="row">
      <div class="col-12">
        @yield('content')
      </div>
    </div>
  </div>

@include('front.inc.footer')

</body>
</html>
