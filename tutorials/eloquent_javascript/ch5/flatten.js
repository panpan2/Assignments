function combine(arr1, arr2) {
    return arr1.concat(arr2);
}
var arrays = [[1, 2, 3], [4, 5], [6]];
console.log(arrays.reduce(combine));
