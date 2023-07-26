<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>{{$seo->title}}</title>
    <meta name="description" content="{{$seo->description}}"/>
    <meta name="keywords" content="{{$seo->keywords}}"/>
</head>

<body>

</body>

@include('components.navbar')
@include('components.loder')
<div class="" id="content-div">
    @yield('content')
</div>

@include('components.footer')

</html>
