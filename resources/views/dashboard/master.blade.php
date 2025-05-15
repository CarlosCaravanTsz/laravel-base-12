<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    @session('key')
        <div>
            <h2>{{ $value }}</h2>
        </div>
    @endsession

    @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    @yield('content')

    <section>
        @yield('section')
    </section>

</body>
</html>
