@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-info text-left"> Did you ever wondered, which food you have in your fridge? </h1>
            <p> Weit hinten, hinter den Wortbergen, fern der Länder Vokalien und Konsonantien leben die Blindtexte. Abgeschieden wohnen sie in Buchstabhausen an der Küste des Semantik, eines großen Sprachozeans. Ein kleines Bächlein namens Duden fließt durch ihren Ort und versorgt sie mit den nötigen Regelialien. Es ist ein paradiesmatisches Land, in dem einem gebratene Satzteile in den Mund fliegen. Nicht einmal von der allmächtigen Interpunktion werden die Blindtexte beherrscht – ein geradezu unorthographisches Leben. Eines Tages aber beschloß eine kleine Zeile Blindtext, ihr Name war Lorem Ipsum, hinaus zu gehen in die weite Grammatik. Der große Oxmox riet ihr davon ab, da es dort wimmele von bösen Kommata, wilden Fragezeichen und hinterhältigen Semikoli, doch das Blindtextchen ließ sich nicht beirren. Es packte seine sieben Versalien, schob sich sein Initial in den Gürtel und machte sich auf den Weg. Als es die ersten Hügel des Kursivgebirges erklommen hatte, warf es einen letzten Blick zurück auf die Skyline seiner Heimatstadt Buchstabhausen, die Headline von Alphabetdorf und die Subline seiner eigenen Straße, der Zeilengasse. Wehmütig lief ihm eine rhetorische Frage über die Wange, dann setzte es seinen Weg fort. Unterwegs traf es eine Copy. Die Copy warnte das Blindtextchen, da, wo sie herkäme wäre sie </p>
        </div>

        <div class="col-md-8">
        
            @if (Route::has('login'))
                
                        @auth
                        <a type="button" class="btn btn-outline-info" href="{{ url('/products') }}"> Show my fridge </a>
                        
                    @else

                            @if (Route::has('register'))
                                <a type="button" class="btn btn-outline-info" href="{{ route('login') }}">Login </a>
                                <a type="button" class="btn btn-outline-info" href="{{ route('register') }}">Register</a>
                                <!--<a href="{{ route('register') }}"> Not a member yet? Register now!</a> -->
                            @endif

                        @endauth
                    
                @endif
        
        </div>
       
    </div>
</div>
@endsection
