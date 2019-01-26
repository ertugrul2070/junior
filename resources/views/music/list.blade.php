<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-heroes Music List</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">

</head>
<body>

<div class="container">
    <div class="row">

        <div class="col-md-12">
            <h1>Top 10 hits of January 2019</h1>
        </div>

        {{--set all songs in foreach to select specific song and if position is 1 or 2 set on top(bigger cards).--}}
        @foreach($songs as $song)
            @if($song['position'] == 1 || $song['position'] == 2)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>{{$song['artist']}}</h3>
                            <h4>{{$song['title']}}</h4>
                        </div>
                        <div class="card-body">
                            <ul class="no-bullet inline">
                                <li class="badge badge-primary position-this-week">{{$song['position']}}</li>
                                <li class="badge badge-secondary position-last-week">{{$song['last_week']}}</li>
                            </ul>
                            <p class="text-center">Total weeks: {{$song['total_weeks']}}</p>
                            <a href="{{url ('/song/'.$song['id'])}}" class="btn btn-primary">More info</a>
                        </div>
                    </div>
                </div>
            @endif
        {{--if song position is lower than 3 set on smaller cards.--}}
            @if($song['position'] >= 3)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>{{$song['artist']}}</h3>
                            <h4>{{$song['title']}}</h4>
                        </div>
                        <div class="card-body">
                            <ul class="no-bullet inline">
                                <li class="badge badge-primary position-this-week">{{$song['position']}}</li>
                                <li class="badge badge-secondary position-last-week">{{$song['last_week']}}</li>
                            </ul>
                            <p class="text-center">Total weeks: {{$song['total_weeks']}}</p>
                            <a href="{{url ('/song/'.$song['id'])}}" class="btn btn-primary">More info</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

    </div>
</div>
<script src="{{mix('js/app.js')}}"></script>
</body>
</html>
