function printPersonsDetails(inputArr) {
    let arrOfObjects = [];
    let inputLength = inputArr.length;

    for (let i = 0; i < inputLength; i++) {
        let tokens = inputArr[i].split(' -> ');
        let personName = tokens[0];
        let personAge = Number(tokens[1]);
        let personGrade = Number(tokens[2]);
        let objToAdd = {pName: personName, age: personAge, grade: personGrade};
        arrOfObjects.push(objToAdd);
    }

    for (let obj of arrOfObjects) {
        console.log(`Name: ${obj.pName}`);
        console.log(`Age: ${obj.age}`);
        console.log(`Grade: ${obj.grade.toFixed(2)}`);
    }
}