function findThreeLargestNumbers(input) {
    let numbers = input.map(Number);
    let index = Math.min(numbers.length, 3);
    let sortedNums = numbers.sort((a, b) => b - a);

    for (let i = 0; i < index; i++) {
        console.log(sortedNums[i]);
    }
}