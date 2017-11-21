function getSymmetricNumbers(input) {
    let n = Number(input[0]);

    for (let i = 1; i <= n; i++) {
        if (isSymmetric(i.toString())){
            console.log(i)
        }
    }
    function isSymmetric(str) {
        for (let j = 0; j < str.length / 2; j++){
            if (str[j] != str[str.length - j - 1]){
                return false;
            }
        }
        return true;
    }
}
