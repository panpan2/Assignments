function countBs(str) {
    return countChar(str, "B");
}
function countChar(str, ch) {
    var counter = 0;
    for (var pos = 0; pos < str.length; pos++) {
        if (str.charAt(pos) === ch) {
            counter++;
        }
    }
    return counter;
}

console.log(countBs("BBC"));
console.log(countChar("kakkerlak", "k"));
