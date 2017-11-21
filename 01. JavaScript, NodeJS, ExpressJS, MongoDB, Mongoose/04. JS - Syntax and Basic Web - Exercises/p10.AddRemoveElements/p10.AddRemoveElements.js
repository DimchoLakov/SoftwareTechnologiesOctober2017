function addRemoveElements(inputArr) {
    let arr = [];
    for (let i = 0; i < inputArr.length; i++) {
        let tokens = inputArr[i].split(' ');
        let command = tokens[0];
        let index = Number(tokens[1]);

        if (command === "add"){
            arr.push(index);
        }
        else if (command === "remove"){
            arr.splice(index, 1);
        }
    }
    arr.forEach(n => console.log(n));
}