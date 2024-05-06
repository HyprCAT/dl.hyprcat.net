<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('/css/master.css') }}">
    <title>{{ $title ?? 'Unknown' }} - HyprDL</title>
</head>
<body>
<center><h1>HyprDL</h1></center>
<hr>
{{ $slot }}
<hr>
<center>
    This site is best viewed at 1024x768 with 16-bit color or better<br>
    &copy; <a href="//www.diskfloppy.me/">floppyNET</a> &amp; <a href="//www.hyprcat.net/">HyprCAT</a> {{ date('Y') }}, v{{ config('app.version') }},
    Served by {{ gethostname() }},
    <i><a href="mailto:webmaster@hyprcat.net">webmaster@hyprcat.net</a></i><br>
</center>
</body>
</html>
