@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

            <div class="card" style="border: thin solid white">
                <b><div class="card-header" style="text-align: center">{{ __('WHMIS Training') }}</div></b>
                <a><iframe src="https://docs.google.com/presentation/d/1vsDbUVRXwhXPnr1ihFuo34zakiDqt55Z/edit?usp=sharing&ouid=107305545697254587873&rtpof=true&sd=true LiWao2DU8xKnR0kUs91/embed?start=false&amp;loop=false&amp;delayms=3000&amp;rm=minimal" width="1000" height="700" allowfullscreen="allowfullscreen" webkitallowfullscreen="webkitallowfullscreen" mozallowfullscreen="mozallowfullscreen"></iframe></a>


{{-- 
                <iframe src="/pdf/whmispdf.pdf" width="100%" height="500px">
                </iframe> --}}

                <a class="btn btn-primary btn-block" href="whmisquiz1"
                > <b style="color:white;">Quiz</b></a>

                <div class="card-body">
                </div>
            </div>
    </div>
</div>
@endsection
