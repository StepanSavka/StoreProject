<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

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
    </style>
</head>
<body>
<div class="body">
    <div class="d-flex justify-content-center p-1 bg-navbar">
        <a class="btn pl-auto pr-auto bd-highlight text-white">最新消息</a>
        <a class="btn pl-auto pr-auto bd-highlight text-white">新型肺炎疫情最新安排</a>
        <a class="btn btn-latest-news pl-auto pr-auto bd-highlight text-current" href="javascript:void(0)">查看</a>
    </div>
    @include('layouts.header')
    @yield('custom_content')
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
@yield('custom_scripts')
</body>
</html>