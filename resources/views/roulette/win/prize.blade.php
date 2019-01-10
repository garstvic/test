@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Congratulations, {{ Auth::user()->name }}!</div>

                <div class="panel-body">
                    <p>You have won Prize!</p>
                    <p>User Loyalty: {{ Auth::user()->loyalty->value }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection