<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deliveboo</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <div id="app">
    @include('components.header')  

    <main>
      @yield('content')
    </main>    
    
    @include('components.footer')
  </div>  
</body>
</html>