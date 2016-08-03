angular.module('myApp', [
    'ngRoute'
]).config(function($routeProvider) {
        $routeProvider
           .when('/', {
                templateUrl: 'views/index.html',
                controller: 'mainCtrl'
            })
            .when('/person/:id', {
                templateUrl: 'views/profile.html',
                controller: 'profileCtrl'
            })
            .otherwise({
                redirectTo: '/'
            });
    });

