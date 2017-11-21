function productThreeNums(arr) {
    let resultArr = arr.map(Number).filter(n => n < 0);
    if (resultArr.length % 2 === 0){
        console.log("Positive");
    }
    else {
        console.log("Negative");
    }
}