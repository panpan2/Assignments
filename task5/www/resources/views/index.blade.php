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
        <!-- controller, service, application -->
        <!-- <script src="js/app.js"></script> -->

    </head>
    <body class="container" ng-app="registerApp" ng-controller="UserController">
        <div class="col-md-8 col-md-offset-2">

            <form ng-submit="submitUser()">

                <div class="form-group">
                    Name: <input type="text" class="form-control input-lg" name="name" ng-model="userData.author">
                </div>

                <div class="form-group">
                    Email: <input type="email" class="form-control input-lg" name="email" ng-model="userData.text">
                </div>

                <div class="form-group">
                    Phone: <input type="tel" class="form-control input-lg" name="phone" ng-model="userData.text">
                </div>


                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </body>
</html>

