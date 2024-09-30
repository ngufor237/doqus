@extends('includes.header') @section('content')
    <body class="main-content">
        <div class="row">
            <div class="col-md-2" style="background-color: #FFD700; ">
                dddfdfdddddddddd
                <span style="font-family: georgia, palatino, serif; color: #e03e2d;">WWWDC</span></li> <li style="font-family: georgia, palatino, serif; color: #e03e2d;"><span style="font-family: georgia, palatino, serif; color: #e03e2d;">SCWSCXD</span></li> <li style="font-family: georgia, palatino, serif; color: #e03e2d;"><span style="font-family: georgia, palatino, serif; color: #e03e2d;">CWDCECEW</span></li> </ul> <h1>CDXDSCDCDSC</h1> <ul> <li style="font-family: georgia, palatino, serif; color: #e03e2d;"><span style="font-family: georgia, palatino, serif; color: #e03e2d;">WWWDC</span></li> <li style="font-family: georgia, palatino, serif; color: #e03e2d;"><span style="font-family: georgia, palatino, serif; color: #e03e2d;">SCWSCXD</span></li> <li style="font-family: georgia, palatino, serif; color: #e03e2d;"><span style="font-family: georgia, palatino, serif; color: #e03e2d;">CWDCECEW</span></li> </ul> <h1>CDXDSCDCDSC</h1> <ul> <li style="font-family: georgia, palatino, serif; color: #e03e2d;"><span style="font-family: georgia, palatino, serif; color: #e03e2d;">WWWDC</span>
            </div>
            <div class="col-md-8">
                asgcdjh,,,,,,,,,,,,,,,,,,,,,,,,,,,,ABABABABABABABABABABABABABABABABABefgcccccccccccaq
                @foreach($post as $post)
                @php
                $string = $post->content;
                     $d= trim($string, '"');
                @endphp
                {{$d}}
                @endforeach
            </div>
            <div class="col-md-2">
                comments
            </div>
        </div>
        <br><br>
    </body>
@stop