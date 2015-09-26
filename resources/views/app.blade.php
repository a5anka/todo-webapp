<!DOCTYPE html>
<html>
<head>
    <title>TODO</title>

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0 40px;
            padding: 0;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
        }

        .content {
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        @if (Session::has('message'))
            <div class="flash alert-info">
                <p>{{ Session::get('message') }}</p>
            </div>
        @endif
        @if ($errors->any())
            <div class='flash alert-danger'>
                @foreach ( $errors->all() as $error )
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        @yield('content')
    </div>
</div>
</body>
</html>
