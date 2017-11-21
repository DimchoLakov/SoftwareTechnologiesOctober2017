function setValuesToIndxs(inpurArr) {
    "use strict";
    let length = Number(inpurArr[0]);
    let resultArr = new Array(length);

    for (let i = 0; i < resultArr.length; i++) {
        resultArr[i] = 0;
    }
    for (let i = 1; i < inpurArr.length; i++) {
        let splittedString = inpurArr[i].split(' - ');
        let index = Number(splittedString[0]);
        let value = Number(splittedString[1]);
        resultArr[index] = value;
    }
    resultArr.forEach(n => console.log(n));
}

setValuesToIndxs(['5', '0 - 3', '3 - -1', '4 - -2']);