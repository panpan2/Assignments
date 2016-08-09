<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Register</title>

        <!-- Load bootstrap -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
        <link rel="stylesheet" href="/css/error.css">
        <style>
            body        { padding-top:30px; }
            form        { padding-bottom:20px; }
        </style>

        <!-- Load JS libraries -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
        <script src="//rawgit.com/digitalBush/jquery.maskedinput/1.4.1/dist/jquery.maskedinput.min.js" type="text/javascript"></script>
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js" type="text/javascript"></script>

        <!-- Input mask -->
        <script>
        jQuery(function($){
           $("#phone").mask("(999) 9999999",{placeholder:"(XXX) XXXXXXXXX"});
        });
        </script>

        <!-- Load Angular resources -->
        <script src="js/app.js"></script>
        <script src="js/controllers/userCtrl.js"></script>
        <script src="js/services/userService.js"></script>

    </head>
    <body class="container" ng-app="registerApp" ng-controller="userController">
        <div class="col-md-8 col-md-offset-2">

            <form name="userForm" ng-submit="submitUser()" novalidate>

                <div class="form-group" ng-class="{ 'error has-error' : userForm.name.$invalid && !userForm.name.$pristine }">
                    Name: <input type="text" class="form-control input-lg" name="name" ng-model="userData.name" required ng-maxlength="255">
                    <p ng-show="userForm.name.$invalid && !userForm.name.$pristine" class="help-block">Invalid name.</p>
                </div>

                <div class="form-group" ng-class="{ 'error has-error' : userForm.email.$invalid && !userForm.email.$pristine }">
                    Email: <input type="email" class="form-control input-lg" name="email" ng-model="userData.email" required ng-maxlength="255">
                    <p ng-show="userForm.email.$invalid && !userForm.email.$pristine" class="help-block">Invalid email.</p>
                </div>

                <div class="form-group" ng-class="{ 'error has-error' : userForm.phone.$invalid && !userForm.phone.$pristine }">
                    Phone: <input type="tel" class="form-control input-lg" name="phone" id="phone" ng-model="userData.phone" required ng-maxlength="13">
                    <p ng-show="userForm.phone.$invalid && !userForm.phone.$pristine" class="help-block">Invalid phone.</p>
                </div>

                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary btn-lg" ng-disabled="userForm.$invalid">Submit</button>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>

            <!-- Thank you message -->
            <div class="text-center" ng-show="submitSuccess">
                <h1 id="thankyou">Thank you!</h1>
                <p>You have sucessfully registered!</p>
            </div>

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

        </div>
    </body>
</html>
