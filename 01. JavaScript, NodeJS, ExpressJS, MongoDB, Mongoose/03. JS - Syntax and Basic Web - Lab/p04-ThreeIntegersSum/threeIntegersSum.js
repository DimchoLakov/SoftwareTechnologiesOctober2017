function sumThreeIntegers(input) {
    let arrNums = input[0].split(" ").map(Number);

    let num1 = arrNums[0];
    let num2 = arrNums[1];
    let num3 = arrNums[2];

    if (num1 + num2 === num3){
        console.log(`${Math.min(num1, num2)} + ${Math.max(num1, num2)} = ${num3}`)
    }
    else if (num1 + num3 === num2){
        console.log(`${Math.min(num1, num3)} + ${Math.max(num1, num3)} = ${num2}`)
    }
    else if (num2 + num1 === num3){
        console.log(`${Math.min(num2, num1)} + ${Math.max(num2, num1)} = ${num3}`)
    }
    else if (num2 + num3 === num1){
        console.log(`${Math.min(num2, num3)} + ${Math.max(num2, num3)} = ${num1}`)
    }
    else{
        console.log("No")
    }
}