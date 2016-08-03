angular.module('myApp')
    .factory('PersonService', function PersonService() {
    var PersonService = {};
    PersonService.people = [];
    PersonService.savePerson = function (person) {
        PersonService.people.push(person);
    };
    return PersonService;
});
