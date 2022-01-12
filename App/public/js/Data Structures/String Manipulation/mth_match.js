console.log('mth_math.js');

let str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi eveniet illo modi molestias perferendis provident quas sed tempore vitae? Consequatur consequuntur culpa dicta dolores exercitationem facilis, hic ipsum suscipit.";

let query = 'dolor';
let found = str.match(`${query}`);
let index = found['index'];

console.log(
    'At the position : ' + index +
    '\n' + 'The character : ' +
    str.substring(index, index + found[0].length)
);
