<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome/font-awesome.css')}}">

    @yield('custom-title')
    @yield('custom_styles')
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .bg-navbar{
            background-color:#8E96FF;
        }
        .btn-latest-news{
            background-color: #FFF563;
        }
        .btn-current{
            background-color: #E0CBF6;
        }
        .text-current{
            color: #4D5567;
        }
        .bg-current{
            background-color: #56628C;
        }
        .bg-warning{
            background-color: #FABD02;
        }
        .btn-success{
            background-color: #28E8DB;
        }
        .mr-header{
            margin-right: 26%;
        }
        .dropdown-menu{
            min-width: 5rem;
        }
    </style>
</head>
<body>
<div class="body">
    <div class="d-flex justify-content-center p-1 bg-navbar">
        <a href="javascript:void(0)" class="btn pl-auto pr-auto bd-highlight text-white">最新消息</a>
        <a href="javascript:void(0)" class="btn pl-auto pr-auto bd-highlight text-white">新型肺炎疫情最新安排</a>
        <a href="javascript:void(0)" class="btn btn-latest-news pl-auto pr-auto bd-highlight text-current" href="javascript:void(0)">查看</a>
    </div>
    @include('layouts.header')
    @yield('custom_content')
</div>
<script src="{{asset('js/jquery-3.5.1.slim.min.js')}}" ></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}" ></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
@yield('custom_scripts')
</body>
</html>