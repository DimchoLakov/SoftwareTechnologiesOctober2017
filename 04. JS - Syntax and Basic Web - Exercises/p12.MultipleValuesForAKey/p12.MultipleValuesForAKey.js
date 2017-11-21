function storeManyValuesForAKey(inputArr) {
    let resultObj = {};
    for (let i = 0; i < inputArr.length - 1; i++) {
        let tokens = inputArr[i].split(' ');
        let key = tokens[0];
        let value = tokens[1];

        if (!(key in resultObj)) {
            resultObj[key] = new Array();
            resultObj[key].push(value);
        }
        else {
            resultObj[key].push(value);
        }
    }
    let keyToFind = inputArr[inputArr.length - 1];

    if (!(keyToFind in resultObj)) {
        console.log("None");
    }
    else {
        resultObj[keyToFind].forEach(v => console.log(v));
    }
}