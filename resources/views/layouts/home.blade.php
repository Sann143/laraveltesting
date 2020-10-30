<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="port" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        #header {
            height: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield("content")
    </div>
</body>
</html>