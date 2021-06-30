<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ $title }}</title>
</head>

<body>
    <div class="bg-gray-100 h-screen">
        <div class="w-10/12 ml-auto mr-auto">
        {{ $slot }}
        </div>
    </div>

</body>

</html>