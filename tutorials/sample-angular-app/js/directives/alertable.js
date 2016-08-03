angular.module('myApp').directive('alertable', function() {
    return {
        restrict: 'A',
        link: function(scope, element, attrs) {
            element.bind('click', function() {
                alert(attrs.alertable);
            });
        }
    };
});
