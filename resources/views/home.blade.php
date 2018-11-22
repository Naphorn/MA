@extends('layouts.app')
@section('title','Home ManagementAir')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="level1">Lavel 1</a></div>
                <div class="panel-heading"><a href="level2">Lavel 2</a></div>
                <div class="panel-heading"><a href="level3">Lavel 3</a></div>
                <div class="panel-heading"><a href="level4">Lavel 4</a></div>
                <div class="panel-heading"><a href="level5">Lavel 5</a></div>
                <div class="panel-heading"><a href="{{ route('register') }}">Register</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
