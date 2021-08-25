@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

            <div class="card" style="border: thin solid white">
                <b><div class="card-header" style="text-align: center">{{ __('Accessibility for Ontarians 
                    with Disabilities') }}</div></b>
                <a><iframe src="https://docs.google.com/presentation/d/1zhjDPa4iPs0MtQDvIsmDAcbL22IxAXGd/edit?usp=sharing&ouid=107305545697254587873&rtpof=true&sd=true LiWao2DU8xKnR0kUs91/embed?start=false&amp;loop=false&amp;delayms=3000&amp;rm=minimal" width="1000" height="700" allowfullscreen="allowfullscreen" webkitallowfullscreen="webkitallowfullscreen" mozallowfullscreen="mozallowfullscreen"></iframe></a>

                {{-- <object data="https://drive.google.com/file/d/1jGM3gS0if4o3zU-_Tc9H2ce_Rbs8Wu3U/view?usp=sharing" type="application/pdf">
                    <iframe src="https://drive.google.com/file/d/1jGM3gS0if4o3zU-_Tc9H2ce_Rbs8Wu3U/view?usp=sharing"></iframe>
                </object> --}}


                {{-- <iframe src="/pdf/aodapdf.pdf" width="500px" height="420px">
                </iframe> --}}


                {{-- <iframe src="/pdf/aodapdf.pdf" title="testPdf" height="700px" width="400%">
            </iframe> --}}


            

                <a class="btn btn-primary btn-block" href="aodaquiz1"
                > <b style="color:white;">Begin Quiz</b></a>

                <div class="card-body">
                </div>
            </div>
    </div>
</div>
@endsection
