function getCapitalCaseWords(input) {
    let text = input.join(",");
    let words = text.split(/\W+/);

    let capitalCaseWords = words.filter(w => w.toUpperCase() === w).filter(w => w.length > 0);
    let result = capitalCaseWords.join(', ');

    console.log(result);
}