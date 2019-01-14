@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Congratulations, {{ Auth::user()->name }}!</div>

                <div class="panel-body">
                    <p>You have won {{ $prize->prizeCategory->category->name }}</p>
                    @foreach (Auth::user()->payments as $payment)
                        <p><span class="label label-success">Payment</span> {{ $payment->creditCardType }}</p>
                    @endforeach                    
                    <p><span class="label label-success">Prize</span> {{ $prize->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection