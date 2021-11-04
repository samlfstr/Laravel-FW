/*How to use normal time
    date = new Date();
    console.log(date.toString());
    console.log(date.getMilliseconds());
*/

const sumUpTo = n => {
    return n * (n + 1) / 2;
};

const sumUpTo2 = n => {
    total = 0;
    for (let i = 1; i <= n; i++) {
        total += i;
    }
    return total;
};

// efficiant method
t1 = Date.now();
sumUpTo(200000000);
t2 = Date.now();
console.log((t2 - t1) / 1000);

// inefficiant method
t1 = Date.now();
sumUpTo2(200000000);
t2 = Date.now();
console.log((t2 - t1) / 1000);
