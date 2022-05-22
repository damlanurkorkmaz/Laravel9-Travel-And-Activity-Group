<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield("title")</title>
    <meta content="Damla" name="author">
    <meta content="@yield("keywords")" name="keywords">
    <meta content="@yield("description")" name="description">
    <link rel="icon"type="image/x-icon" href="@yield("icon")">

    <!-- Favicon -->
    <link href="{{asset('assets')}}/img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="{{asset('assets')}}/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">

    @yield("head")

</head>

<body class="bg-white">
@include('home._header')




@section('sidebar')
    @include('home._sidebar')
@show


    @yield('content')



@include('home._footer')

</body>
</html>
