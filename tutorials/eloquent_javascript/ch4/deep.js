function deepEqual(obj1, obj2) {
    if (obj1 === obj2) {
        return true;
    }
    if (obj1 != null && typeof obj1 == "object" &&
            typeof obj2 == "object") {
        for (var property in obj1) {
            if (!(property in obj2) ||
                    !deepEqual(obj1[property], obj2[property])) {
                return false;
            }
        }
        return true;
    }
    return false;
}

var obj = {here: {is: "an"}, object: 2};
console.log(deepEqual(obj, obj));
console.log(deepEqual(obj, {here: 1, object: 2}));
console.log(deepEqual(obj, {here: {is: "an"}, object: 2}));
