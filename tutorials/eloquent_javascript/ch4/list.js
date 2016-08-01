function arrayToList(array) {
    var list = null;
    for (var i = array.length - 1; i >= 0; i--) {
        list = prepend(array[i], list);
    }
    return list;
}

function listToArray(list) {
    var ptr = list;
    var arr = [];
    while (ptr != null) {
        arr.push(ptr.value);
        ptr = ptr.rest;
    }
    return arr;
}

function prepend(elem, list) {
    return {value: elem, rest: list};
}

function nth(list, n) {
    if (n == 0 || list == null) {
        return list == null ? null : list.value;
    }
    return nth(list.rest, n - 1);

}

console.log(arrayToList([10, 20]));
console.log(listToArray(arrayToList([10, 20, 30])));
console.log(prepend(10, prepend(20, null)));
console.log(nth(arrayToList([10, 20, 30]), 1));
