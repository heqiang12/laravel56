@extends('test.base')
<!-- <!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TEST练习页面</title>
        @section('testpar')
        <h3>这是一个测试页面</h3>
        <h3>{{ $id }}</h3>
        
    </head>
    <body>
        
    </body>
</html>
 -->
@section('testpar')
@section('content')
<h3>这是一个测试页面</h3>
<h3>{{ $id }}</h3>
<h3>{{ $user }}</h3>
@endsection
