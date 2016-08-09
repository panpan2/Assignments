<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Register</title>

        <!-- Load bootstrap -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
        <style>
            body        { padding-top:30px; }
            form        { padding-bottom:20px; }
        </style>


        <!-- Load JS libraries -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>

        <!-- Load Angular resources -->
        <script src="js/app.js"></script>
        <script src="js/controllers/userCtrl.js"></script>
        <script src="js/services/userService.js"></script>

    </head>
    <body class="container" ng-app="registerApp" ng-controller="userController">
        <div class="col-md-8 col-md-offset-2">

            <form ng-submit="submitUser()">

                <div class="form-group">
                    Name: <input type="text" class="form-control input-lg" name="name" ng-model="userData.name">
                </div>

                <div class="form-group">
                    Email: <input type="email" class="form-control input-lg" name="email" ng-model="userData.email">
                </div>

                <div class="form-group">
                    Phone: <input type="tel" class="form-control input-lg" name="phone" ng-model="userData.phone">
                </div>


                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>

            <!-- Errors in case of sending HTTP requests outside of form -->
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

             <div class="text-center" ng-show="submitSuccess">
                <h1 id="thankyou">Thank you!</h1>
                <p>You have sucessfully registered!</p>
            </div>
        </div>
    </body>
</html>
