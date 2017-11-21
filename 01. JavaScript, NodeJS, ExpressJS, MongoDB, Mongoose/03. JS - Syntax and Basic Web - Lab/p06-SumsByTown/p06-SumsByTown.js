function calcSumsByTowns(input) {
    let tokens = input.map(JSON.parse);
    let townsAndIncome = {};

    for (let item of tokens) {
        if (item.town in townsAndIncome) {
            townsAndIncome[item.town] += item.income;
        }
        else {
            townsAndIncome[item.town] = item.income;
        }
    }
    let sortedTowns = Object.keys(townsAndIncome).sort();
    for (let town of sortedTowns) {
        let key = town;
        let value = townsAndIncome[town];
        console.log(`${key} -> ${value}`);
    }
}
