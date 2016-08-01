function range(start, end, step) {
    if (step == undefined) {
        step = 1;
    }
    var arr = [];
    if (step > 0) {
        for (var i = start; i <= end; i += step) {
            arr.push(i);
        }
    } else {
        for (var i = start; i >= end; i += step) {
            arr.push(i);
        }
    }
    return arr;
}

function sum(array) {
    var sum = 0;
    for (var i = 0; i < array.length; i++) {
        sum += array[i];
    }
    return sum;
}

console.log(range(1, 10));
console.log(range(5, 2, -1));
console.log(sum(range(1, 10)));
