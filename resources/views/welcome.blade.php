<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <style>
        .card-container{
            display: flex;
            justify-content: center;
            flex-direction: column;
            
        }
        .card{
            display: flex;
            align-items: center;
            flex-direction: column;
            text-align: center
            margin: 30px;
            width:250px;
            height:250px;
        }
    </style>
    <body>

        <div class="card-container">
            @foreach ($movie as $item)
            <div class="card">
                <div>Title: {{ $item->title }}</div>
                <div>Original title: {{ $item->original_title}}</div>
                <div>Nationality: {{ $item->nationality }}</div>
                <div>Date: {{ $item->date }}</div>
                <div>Vote: {{ $item->vote }}</div>
            </div>
            @endforeach
        </div>

    </body>
</html>
