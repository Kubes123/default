@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Complete') }}</div>

                <div class="card-body">
                    <b><a>Congratulations <i>{{ Auth::user()->name }}</i>!</a></b>
                    <br>
                    <br>

                    <a>You have successfully completed your certification.</a>
                    <br>
                    <br>

        

                        <a class="btn btn-warning btn-block" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                           <b> {{ __('Click here to send certificate to HR.') }} </b>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
