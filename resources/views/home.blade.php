@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Picos</div>

                <div class="card-body" style="background-color: black; color: white;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!<br><br>

                            <a href="{{ url('/pirma_midi') }}" style="color: white;">Pirma midi</a><br>
                            <a href="{{ url('/pirma_maxi') }}" style="color: white;">Pirma maxi</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
