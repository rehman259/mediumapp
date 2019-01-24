<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ config('app.url') }}/css/app.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/primary-menu.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <style>
        .padded-50{
            padding: 40px;
        }
        .text-center{
            text-align: center;
        }
    </style>

</head>


<body class=" ">

<div class="content-wrapper">
    
    @include('includes.header')

    {{-- <div class="header-spacer"></div> --}}
    <div class="stunning-header stunning-header-bg-lightviolet">
          <div class="stunning-header-content">
                <h1 class="stunning-header-title">Welcome: Latest Articles</h1>
          </div>
    </div>
    <div class="header-spacer"></div>

    <div class="container">

        <div id="app">
          <articles></articles>
        </div>
        
    </div>
    
</div>

<!-- Footer -->
@include('includes.footer')
<!-- End Footer -->

<!-- JS Script -->
<script src="{{ config('app.url') }}/js/app.js"></script>
<!-- ...end JS Script -->

</body>
</html>
