console.log('compound_interest.js');

let p = [];
let interest = 0.11; // %11
p[0] = 10000;


for (let i = 1; i <= 30; i++) {
    p[i] = p[ i-1 ] + interest * p[ i-1 ];
}

console.log(p[30]);
