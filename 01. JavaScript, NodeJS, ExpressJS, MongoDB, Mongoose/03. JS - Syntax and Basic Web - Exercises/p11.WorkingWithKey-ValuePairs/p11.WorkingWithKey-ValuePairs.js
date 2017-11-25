function keyValuePairs(inputArr) {
    let resultObj = {};
    for (let i = 0; i < inputArr.length - 1; i++) {
        let tokens = inputArr[i].split(' ');
        let key = tokens[0];
        let value = tokens[1];

        resultObj[`${key}`] =  value;
    }
    let keyToFind = inputArr[inputArr.length - 1];
    if (resultObj.hasOwnProperty(keyToFind)){
        console.log(resultObj[keyToFind]);
    }
    else{
        console.log("None");
    }
}