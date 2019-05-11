let datalain = [
    ['g', 'h', 'i', 'j'], ['a', 'c', 'b', 'e', 'd'], ['g', 'e', 'f']

]
//fungsi sorting untuk array terpendek ke terpanjang
function short_length(a, b) {
    return a.length - b.length;
}

//fungsi sorting menggunakan bubblesort
function bubbleSort(array) {
    let done = false;
    while (!done) {
        done = true;
        for (let i = 1; i < array.length; i += 1) {
            if (array[i - 1] > array[i]) {
                done = false;
                let tmp = array[i - 1];
                array[i - 1] = array[i];
                array[i] = tmp;
            }
        }
    }

    return array;
}

//fungsi sorting multidimensional array
function short_array(data) {
    let temp = data.sort(short_length)
    for (let i = 0; i < temp.length; i++) {
        bubbleSort(temp[i])
    }
    return temp;
}
//menampilkan output
console.log(short_array(datalain))