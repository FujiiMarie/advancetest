<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
    body {
      font-size:15px;
      margin: 0 50px;
      height: auto;
    }
    h1 {
      font-size:20px;
      text-align: center;
      margin: 30px;
    }
    svg.w-5.h-5 {/*paginate矢印の大きさ調整*/
      width: 30px;
      height: 30px;
    }

    </style>
  </head>
  <body>
    <h1>@yield('title')</h1>
    <div class="content">
    @yield('content')
    </div>
</body>
</html>