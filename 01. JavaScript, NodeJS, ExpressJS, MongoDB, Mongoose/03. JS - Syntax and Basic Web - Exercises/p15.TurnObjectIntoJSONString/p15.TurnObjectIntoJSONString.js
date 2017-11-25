function stringifyJSON(inputArr) {
    let objToStringify = {};
    for (let str of inputArr) {
        let tokens = str.split(' -> ');
        let prop = tokens[0];
        let value = tokens[1];
        if (prop === "age"){
            value = Number(tokens[1]);
        }
        if (prop === "grade"){
            value = Number(tokens[1]);
        }

        objToStringify[`${prop}`] = value;
    }
    console.log(JSON.stringify(objToStringify));
}

stringifyJSON([
    'name -> Angel',
    'surname -> Georgiev',
    'age -> 20',
    'grade -> 6.00',
    'date -> 23/05/1995',
    'town -> Sofia'
]);