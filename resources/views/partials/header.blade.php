<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'FC Barcelona')</title>
    <link rel="icon" type="icon" href="{{ URL::to('images/site/fc-icon.png') }}">
    {!! HTML::style('stylesheet/site.css') !!}
    {!! HTML::style('stylesheet/font-awesome.min.css') !!}
    @yield('style')
</head>
<body>
