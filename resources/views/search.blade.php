<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div id="container">
    <h1>Dictionary</h1>
    <img id="igpay" src="https://escapeachamber.com/pi/igpay.png">

    <form method="post" action="/search">
        @csrf
        <input type="text" id="sentence" placeholder="Enter your sentence here." name="search">
        <input type="submit" onclick="handleClick()" value="Translate" id="translate">
    </form>
</div>
</body>
</html>