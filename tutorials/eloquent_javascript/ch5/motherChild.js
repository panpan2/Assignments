function average(array) {
  function plus(a, b) { return a + b; }
  return array.reduce(plus) / array.length;
}

var list = JSON.parse(require('./anc.js'));
var byName = {};
list.forEach(function(person) {
  byName[person.name] = person;
});

var ageDiffArr = list.filter(function (person) {
                     return byName[person.mother] != null;
                 }).map(function (person) {
                     return byName[person.name].born -
                            byName[person.mother].born;
                 });
console.log(average(ageDiffArr));
