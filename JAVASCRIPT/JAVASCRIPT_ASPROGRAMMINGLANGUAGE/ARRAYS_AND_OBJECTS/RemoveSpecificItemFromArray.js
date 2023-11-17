// loop a for loop
// check for an item in loop and "push" it into another loop

// program to remove item from an array

function removeItemFromArray(array, n) {
    const newArray = [];

    for ( let i = 0; i < array.length; i++) {
        if(array[i] !== n) {
            newArray.push(array[i]);
        }
    }
    return newArray;
}

const result = removeItemFromArray([1, 2, 2,3 ,2, 4 , 5], 2);

console.log(result);
