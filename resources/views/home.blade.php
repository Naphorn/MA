@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lavel 1</div>
                <div class="panel-heading">Lavel 2</div>
                <div class="panel-heading">Lavel 3</div>
                <div class="panel-heading">Lavel 4</div>
                <div class="panel-heading">Lavel 5</div>

                <!-- <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection
