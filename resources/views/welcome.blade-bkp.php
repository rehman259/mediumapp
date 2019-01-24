<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>ContactStore</title>
    <link rel="stylesheet" href="{{ config('app.url') }}/css/app.css">
  </head>
  <body>
    <div class="container">
      <div id="app">
        <contacts></contacts>
      </div>
    </div>

    <script src="{{ config('app.url') }}/js/app.js"></script>
  </body>
</html>
