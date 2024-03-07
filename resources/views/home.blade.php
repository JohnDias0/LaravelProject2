<!DOCTYPE html>
<html lang="en">
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
            <h1 class="text-center mb-4">Welcome to Our Church</h1>
            <p class="lead text-center">Having a website is vital for building your church’s online presence. A great church website can foster community, keep church members informed and engaged, and reach out to new visitors.</p>
            <p class="text-center">
                <a href="#" class="btn btn-primary btn-lg">Learn More</a>
            </p>
        </div>
    </div>
</div>
@endsection
</body>
</html>