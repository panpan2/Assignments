function min(a, b) {
    if (a == undefined || b == undefined) {
        return a || b;
    }
    return a < b ? a : b;
}

console.log(min(2));
console.log(min(undefined, 3));
console.log(min(null, -1));
console.log(min(4, null));
console.log(min(5, undefined));
console.log(min(1, 2));
console.log(min(-1, -2));
console.log(min(-1, 1));
