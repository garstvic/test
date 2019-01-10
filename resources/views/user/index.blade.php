@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome, {{ Auth::user()->name }} !</div>
                <div class="panel-body">
                    <div class="col-md-6 col-md-offset-4">
                        <p>Let's Play a Game!</p>
                    </div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('roulette.win.prize') }}">
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-gift"></i> PLAY!
                                </button>
                                <input type="hidden" name="_token" value="{{ Session::token() }}" />
                            </div>
                        </div>
                    </form>                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection