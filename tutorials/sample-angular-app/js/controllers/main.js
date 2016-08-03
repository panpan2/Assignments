angular.module('myApp')
    .controller('mainCtrl',
        function mainCtrl ($scope, PersonService) {
                $scope.name = 'Def';
                $scope.savePerson = function() {
                    PersonService.savePerson($scope.name);
                    $scope.people = PersonService.people;
                    $scope.name = '';
                }
    });
//angular.module('myApp').controller('mainCtrl', function($scope, PersonService) {
//    $scope.name = 'Default Name';
//    $scope.people = [];
//    $scope.savePerson = function() {
//        $scope.people.push($scope.name);
//        $scope.name = '';
//    }
//});
