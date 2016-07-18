<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <form action=" {{ route('register_user') }}", method="post">
            Name: <input type="text" name="name"><br>
            Email: <input type="text" name="email"><br>
            <input type="submit" value="Register">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </body>
</html>
