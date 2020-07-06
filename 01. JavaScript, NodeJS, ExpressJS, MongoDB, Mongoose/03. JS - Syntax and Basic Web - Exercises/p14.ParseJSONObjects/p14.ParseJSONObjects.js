function parseJSONObjects(inputArr) {
    for (let str of inputArr) {
        let json = JSON.parse(str);
        console.log(`Name: ${json.name}`);
        console.log(`Age: ${json.age}`);
        console.log(`Date: ${json.date}`);
    }
}

parseJSONObjects([
    '{"name":"Gosho","age":10,"date":"19/06/2005"}',
    '{"name":"Tosho","age":11,"date":"04/04/2005"}'
]);