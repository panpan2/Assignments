angular.module('userCtrl', [])
    .controller('userController', function ($scope, $http, User) {
        $scope.submitSuccess = false;
        $scope.userData = {};
        // GET ALL USERS
        User.get()
            .success(function(data) {
                $scope.users = data;
            })
            .error(function(data) {
                console.log(data);
            });

        $scope.submitUser = function() {
            User.save($scope.userData)
                .success(function(data) {
                    console.log("Registered");
                    $scope.submitSuccess = true;
                })
                .error(function(data) {
                    console.log(data);
                });
        };
    });
