angular.module('userService', [])
    .factory('User', function($http) {
        return {
            get : function() {
                return $http.get('/api/users');
            },
            save : function(userData) {
                return $http({
                    method: 'POST',
                    url: '/api/users',
                    headers: {'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param(userData)
                });
            }
        };
    });
