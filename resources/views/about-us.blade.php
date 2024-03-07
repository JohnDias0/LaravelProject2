<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello World</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h1 class="text-center mb-4">About Us</h1>
            <p class="lead text-center">Our church was founded in 1880 and has been serving the community ever since. Our mission is to spread the love of God and to help those in need. We are a welcoming community that values diversity and inclusivity.</p>
            <p class="text-center">
                <a href="#" class="btn btn-primary btn-lg">Learn More</a>
            </p>
        </div>
    </div>
</div>
@endsection
</body>
</html>