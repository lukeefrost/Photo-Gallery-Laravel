<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Photo Gallery</title>

    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')
    <br>
    @include('inc.messages')
    <br>
    @yield('content')
  </body>
</html>
