<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$pageTitle or ''}}</title>
    <style>
        .sp-container {
            display: grid;
            grid-template-columns: 1fr 11fr;
            grid-gap: 10px;
        }
        .sp-menu ul {
            list-style: none;
            padding-left: 0.5em;
        }
    </style>
</head>
<body>
<h1>{{$pageTitle or ''}}</h1>
<hr>
<!-- container -->
<div class="sp-container">
    <!-- sidebar -->
    @include('simple-admin::layout.sidemenu')
    <!-- main content -->
    <div>
        <h2>{{$contentTitle or ''}}</h2>
        <hr>
      @yield('content')
    </div>
</div>
</body>
</html>
