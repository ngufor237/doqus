@extends('includes.header') @section('content')
    <body class="main-content">
        <div class="row">
            <div class="col-md-2 container" style="background-color: #FFD700; ">
                dddfdfdddddddddd
                @foreach($title as $title)
                    <a href="/post/{{$title->id}}">
                        {{$title->title}}
                    </a><br>
                @endforeach
            </div>
            <div class="col-md-8">
                asgcdjh,,,,,,,,,,,,,,,,,,,,,,,,,,,,ABABABABABABABABABABABABABABABABABefgcccccccccccaq
                @foreach($post as $post)
                    @php
                    $string = $post->content;
                    echo $string;
                    @endphp
                    
                @endforeach
            </div>
            <div class="col-md-2">
                comments
            </div>
        </div>
        <br><br>
    </body>
@stop