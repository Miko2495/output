@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
       <h1>食べログ</h1>
       <form action='/shops' method='POST'>
           @csrf
           <div class='shop_name'>
               <h2>ShopName</h2>
               <input type='text' name='shop[name]' placeholder='店名'/>
           </div>
           <input type='submit' value='保存'/>
           </form>
           <div class='back'>[<a href='/'>back</a>]</div>
    </body>
</html>
@endsection