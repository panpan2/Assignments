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
    </body>
</html>
