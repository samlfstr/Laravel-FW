console.log('mth_filter.js');

//<editor-fold desc="_Functions">

/* Prime
 - Only divisible by itself and 1
 - 2 is a prime too
 --
 List of numbers arr_x
 To take each arr_x use for
 if 0 return 0
 if 1 return 0
 [(i=2 to 10)[j=2 to i-1]]
 if i % j = 0 return 0
 else return 1
*/


function prime(x) {
    if (x === 0 || x === 1) return false;
    if (x === 2) return false;
    for (i = 2; i < x; i++) {
        if (x % i === 0) return false;
    }
    return true;
}

function rgx_str(x){
    let pattern = /%[0-9]{2,}/;
    return pattern.test(x);
}

function rgx_num(x){
    let pattern = /[0-9]\d\w+/;
    return pattern.test(x);
}

//</editor-fold>
//<editor-fold desc="_Filter Numerical Values">

let arr_x = Array();
let res_filter = Array();
for (let i = 0; i <= 100; i++) {
    arr_x.push(i);
}

// since the return type is a condition I can ..
res_filter [0] = arr_x.filter((elm) => {
    return elm > 50;
});

res_filter [1] = arr_x.filter((elm) => {
    return (elm >= 10 && elm <= 30);
});

res_filter [2] = arr_x.filter((elm) => {
    return prime(elm);
});

//</editor-fold>
//<editor-fold desc="_Filter Characters">

/*
we want to group them as percentage and absolute
lets assume that percentage part is domain and absolute
part is codomain of this paire of numbers

since the filter method takes a callback function
as a condition which returns true or false I can use
regular expressions with it
*/

let str_input = ['%10', 1000, '%50', 5000];
let res_percentage = Array();
let res_absolute = Array();

res_percentage = str_input.filter((item)=>{
    return rgx_str(item);
});

res_absolute = str_input.filter((item)=>{
    return rgx_num(item);
});

console.log(res_percentage);
console.log(res_absolute);

//</editor-fold>











