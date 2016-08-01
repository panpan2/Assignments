function reverseArray(array) {
    var arr = [];
    for (var i = 0; i < array.length; i++) {
        arr.unshift(array[i]);
    }
    return arr;
}

function reverseArrayInPlace(array) {
    var n = array.length;
    for (var i = 0; i < n / 2; i++) {
        var temp = array[i];
        array[i] = array[n - 1 - i];
        array[n - 1 - i] = temp;
    }
    return array;
}

console.log(reverseArray(["A", "B", "C"]));
var arrayValue = [1, 2, 3, 4, 5];
reverseArrayInPlace(arrayValue);
console.log(arrayValue);
